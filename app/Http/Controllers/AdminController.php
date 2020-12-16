<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Member;
use App\User;
use DB;

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

        $TotalMember = Member::all() ->count();
        $Executive = Member::where('executive', 'yes')->count();
        $notExecutive = Member::where('executive', 'no')->count();
        $budget = User::where('budget_allocate', '=', '700000')->first();
        //DB::table('events')->count('budget');
        $duit = $budget -> budget_allocate;
        $total = DB::table('events')->sum('budgets');
        $balance = $duit - $total;
        return view('admin_main',compact('Executive','notExecutive','TotalMember','budget','balance'));
    }

    public function event()
    {
        //return view('admin_event');

        $events = Event::paginate(5);
        return view('admin_event' , compact('events'));
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
      
        
        $event = new Event();
        $event -> title=$request -> get('title');
        $event -> date=$request -> get('date');
        $event -> location=$request -> get('location');
        $event -> fee=$request -> get('fee');
        
        if ($request->hasFile('image')){
            if ($request->file(image)->isValid()){
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);
                $extension = $request->storeAs('/public', 
                $validated['name'].".".$extension);
                $url = 
                Storage::url($validated['name'].".".$extension);
                $file = File::create([
                    'name' => $validated['name'],
                    'url' => $url,
                ]);
            }
            abortt(500, 'could not upload image :(');
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


        //return 'ahahahaha';

        $members = Member::all();
        //$input['Testing Mail Spam Ksrp'] = $this->details['subject'];

        foreach ($members as $member) {
            $members['email'] = $member->email;
            $members['name'] = $member->name;
            \Mail::send('test', ['id'=>$id], function($message) use($member){
                $message->to($member->email, $member->name)
                    ->subject("testing...");
            });

            $events = Event::all();
            return view('admin_main');
        }

        
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


}
