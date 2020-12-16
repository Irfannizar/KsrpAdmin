<?php

namespace App\Observers;

use App\PaymentTransaction;
use Hashids;

class PaymentObserver
{
	/**
     * @param PaymentTransaction $paymentTransaction
     */
    public function created(PaymentTransaction $paymentTransaction)
    {
    	PaymentTransaction::where('id',$paymentTransaction->id)
    	->update([
    		'order_id' => Hashids::encode($paymentTransaction->id)
    	]);
    }
    
	/**
     * @param PaymentTransaction $paymentTransaction
     */
    public function saved(PaymentTransaction $paymentTransaction)
    {
    	PaymentTransaction::where('id',$paymentTransaction->id)
    	->update([
    		'order_id' => Hashids::encode($paymentTransaction->id)
    	]);
    }
}
