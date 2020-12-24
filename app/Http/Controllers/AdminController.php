<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Member;
use App\User;
use App\PaymentTransaction;
use App\Exports\EventsExport;
use App\Exports\PaymentTransactionsExport;
use App\Exports\EventsExportView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function admin()
    {
        $NameMember = User::pluck("name")->values()->toArray();
        
        $TotalMember = Member::all() ->count();
        $Executive = Member::where('executive', 'yes')->count();
        $notExecutive = Member::where('executive', 'no')->count();
        //$budget = User::where('budget_allocate', '=', '700000')->first();
        $budget = Auth::user()->budget_allocate;
        $allbudget = User::pluck("budget_allocate")->values()->toArray();
        //return $budget;
        //DB::table('events')->count('budget');
        $duit = $budget;
        $total = DB::table('events')->sum('budgets');
        $balance = $duit - $total;
        $newduit = [1000,2000,3000];
        $newbulan = ["ali","aiman","aril"];
        //return $budget;
        //return $allbudget;
        //return $NameMember;
        return view('admin_main',compact('allbudget','NameMember','$memberbudget','newduit','newbulan','Executive','notExecutive','TotalMember','budget','balance'));
    }

    public function event()
    {
        //return view('admin_event');

        $events = Event::paginate(9);
        return view('admin_event' , compact('events'));
        //$events = Event::where('region', Auth::user()->region) ->paginate(5);
    }

    public function member()
    {
        //return view('admin_event');

        $members = Member::all();
        return view('admin_member' , compact('members'));
    }


    public function create_event()
    {
        return view('create_event');
    }

    public function store_event(Request $request)
    {
      
        //return $request;
        $event = new Event();
        $event -> title=$request -> get('title');
        $event -> date=$request -> get('date');
        $event -> location=$request -> get('location');
        $event->fee=($request->get('fee') * 100);

            if( $request->hasFile( 'image' ) ) {
                info('hasimage'); //debug
                $destinationPath = storage_path( 'app/public/poster' );
                $file = $request->image;
                $fileName = time() . '.'.$file->clientExtension();
                $file->move( $destinationPath, $fileName );

                $event->poster = $destinationPath.'/' . $fileName;
            }

        $event -> limit_register=$request -> get('limit_register');
        $event -> budgets=$request -> get('budgets');
        $event -> regions=$request -> get('regions');

        $event -> save();

        $events = Event::all();
       // return view('admin_event' , compact('events'));
        return redirect() -> back();
    }

    public function event_show($id)
    {
       $event = \App\Event ::find($id);
       

        return view('event_show', compact('event'));
    }

    public function sendEmail($id)
    {
        $event = \App\Event ::find($id);
        
        $members = Member::all();

        foreach ($members as $member) {
            $members['email'] = $member->email;
            $members['name'] = $member->name;
            \Mail::send('test', $event->toArray(), function($message) use($member){
                $message->to($member->email, $member->name)
                    ->subject("testing...");
            });

            //return view('test', compact('event'));
           // return redirect() -> back();
        }
        //return redirect('event.show');
        return redirect()->route('admin.event',['id'=>$id]);

        
    }

    public function event_search(Request $request)
    {
        
        if($request->get('keyword') !=null)
        {
        $keyword = $request->get('keyword');
        $events = Event::where('title', 'LIKE' , '%'.$keyword. '%') ->get();
        $events = Event::where('title', 'LIKE' , '%'.$keyword. '%') ->paginate(5);
        return view('admin_event', compact('events'));
        }
        else
        {
            $events = Event::paginate(5);
            

            return view('admin_event', compact('events'));

        }

        
    }

    public function member_search(Request $request)
    {
        
        if($request->get('keyword') !=null)
        {
        $keyword = $request->get('keyword');
        $members = Member::where('name', 'LIKE' , '%'.$keyword. '%') ->get();
        return view('admin_member', compact('members'));
        }
        else
        {
            $members = Member::all();
            return view('admin_member', compact('members'));

        }

        
    }

    

    public function email()
    {
       
        return view('test');
    }

    public function register()
    {
       
        return view('register_form');
    }

    public function exportevent() 
    {
        return Excel::download(new EventsExport, 'events.xlsx');
    }

    public function exporteventview() 
    {
        return Excel::download(new EventsExportView, 'events.xlsx');
    }

    public function exportpayment() 
    {
        return Excel::download(new PaymentTransactionsExport, 'payments.xlsx');
    }

    public function Chartjs(){
        $month = array('Jan', 'Feb', 'Mar', 'Apr', 'May');
        $data  = array(1, 2, 3, 4, 5);
        return view('admin_chart',['Months' => $month, 'Data' => $data]);
    }
      


}
