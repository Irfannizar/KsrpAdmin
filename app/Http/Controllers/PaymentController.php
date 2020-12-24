<?php

namespace App\Http\Controllers;

use App\Event;
use App\PaymentTransaction;
use Cknow\Money\Money;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    protected $_merchantCode;
	protected $_merchantKey;

	public function __construct()
	{
		$this->merchant_key = env("IPAY_MERCHANT_KEY");
		$this->merchant_code = env("IPAY_MERCHANT_CODE");
	}

	public function index()
	{
		try {
			
			$payments = PaymentTransaction::with('event')
			->get();

			$payments->map(function($data) {
				$data->status = PaymentTransaction::getDisplayPaymentStatus($data->status);
				$data->amount = Money::MYR($data->amount)->formatByDecimal();
				return $data;
			});
			// return $payments;

			return view('payment.index',compact('payments'));	
		} catch (Exception $e) {
			
			return $e->getMessage();
		}
	}

	public function payment_search(Request $request)
    {
        
        if($request->get('keyword') !=null)
        {
        $keyword = $request->get('keyword');
        $payments = PaymentTransaction::where('ksrp_id', 'LIKE' , '%'.$keyword. '%') ->get();
        return view('payment.index', compact('payments'));
        }
        else
        {
            $payments = PaymentTransaction::all();
            return view('payment.index', compact('payments'));

        }

        
    }
	
	
	public function create($id,Request $request)
	{
		try {
			
			$event = Event::where('id',$id)
			->where('limit_register','>',0)
			->firstOrFail();

			$event = Event::findOrFail($id);
			$event->fee = Money::MYR($event->fee)->formatByDecimal();
			
			return view('payment.create',compact('event'));	
		} catch (Exception $e) {
			
			return $e->getMessage();
		}
		catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
			
			return view('payment.emptystock');
			//return "Event seat already full.";			
		}
	}

	public function store($id, Request $request)
	{
		try {
			
			$event = Event::where('id',$id)
			->where('limit_register','>',0)
			->firstOrFail();

			$transaction = PaymentTransaction::create([
	    		'event_id' => $id,
				'name' => $request->name,
				'ksrp_id' => $request->ksrp_id,
				'region' => $request->region,
		    	'contact_no' => $request->contact_no,
		    	'email' => $request->email,
		    	'amount' => $event->fee,
			]);
			
			$transaction = PaymentTransaction::find($transaction->id);

			// Convert for ipay format. Example, 1.00
			$event->fee = Money::MYR($event->fee)->formatByDecimal();
			$paymentRequest = new \IPay88\Payment\Request($this->merchant_key);
	    	$data = [
	    		'MerchantCode' => $paymentRequest->setMerchantCode($this->merchant_code),
				'PaymentId' =>  $paymentRequest->setPaymentId($request->paymentID),
				'RefNo' => $paymentRequest->setRefNo($transaction->order_id),
				'Amount' => $paymentRequest->setAmount($event->fee),
				'Currency' => $paymentRequest->setCurrency('MYR'),
				'ProdDesc' => $paymentRequest->setProdDesc('Payment for Event '.$event->title),
				'UserName' => $paymentRequest->setUserName($request->name),
				'UserEmail' => $paymentRequest->setUserEmail($request->email),
				'UserContact' => $paymentRequest->setUserContact($request->contact_no),
				'Remark' => $paymentRequest->setRemark(''),
				'Lang' => $paymentRequest->setLang('UTF-8'),
				'Signature' => $paymentRequest->getSignature(),
				'SignatureType' => $paymentRequest->setSignatureType('SHA256'),
				'ResponseURL' => $paymentRequest->setResponseUrl(route('payment-response')),
				'BackendURL' => $paymentRequest->setBackendUrl(route('payment-callback'))
	    	];

	    	$transaction->signature = $paymentRequest->getSignature();
	    	$transaction->save();

	    	return $paymentRequest->make($this->merchant_key, $data);

		} catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
			
			return "Event seat already full.";			
		}
	}

	public function response(Request $request)
    {
		$response = (new \IPay88\Payment\Response)->init($this->merchant_code);
		//for testing on update stock only
		$order_id = $response['data']['RefNo'];

      $transaction = PaymentTransaction::where('order_id',$order_id)
      ->select(['event_id'])
      ->take(1)
      ->get();

      $event = Event::where('id',$transaction[0]->event_id)
    ->where('limit_register','>',0)
    ->firstOrFail();

    $event->limit_register = ($event->limit_register-1);
    $event->save();
		return $response;
    }

    public function callback(Request $request)
    {
    	$merchantcode = $request->MerchantCode;
		$paymentid = $request->PaymentId;
		$refno = $request->RefNo;
		$amount = $request->Amount;
		$ecurrency = $request->Currency;
		$remark = $request->Remark;
		$transid = $request->TransId;
		$authcode = $request->AuthCode;
		$estatus = $request->Status;
		$errdesc = $request->ErrDesc;
		$signature = $request->Signature;
		$ccname = $request->CCName;
		$ccno = $request->CCNo;
		$s_bankname = $request->S_bankname;
		$s_country = $request->S_country;

    	$orderLog = new Logger('payments');
		$orderLog->pushHandler(new StreamHandler(storage_path('logs/payments.log')), Logger::INFO);
		$orderLog->info('PaymentLog', json_encode($request->all()));
		

		// if ($estatus==1) {
			
		// 	try {
				
		// 		$transaction = PaymentTransaction::where('order_id',$refno)
		// 		->firstOrFail();

		// 		// Deduct seats
		// 		Event::where('id',$transaction->id)
		// 		->where('limit_register','>',0)
		// 		->decrement('limit_register');

		// 		if (hash_equals($transaction->signature,$signature) ) {
					
		// 			$transaction->status = 1;
		// 			$transaction->auth_code = $authcode;
		// 			$transaction->remarks = $remark;
		// 			$transaction->ipay_transaction_id = $transid;
		// 			$transaction->save();
		// 		}

		// 	} catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
				
		// 		return abort(404);
		// 	}
		// }

    }
    
}
