<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Member;

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
        return view('admin_main');
    }

    public function event()
    {
        //return view('admin_event');

        $events = Event::all();
        return view('admin_event' , compact('events'));
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
        $event -> save();

        return redirect() -> back();
    }

    public function event_show($id)
    {
        $event = \App\Event ::find($id);

        return view('event_show', compact('event'));
    }

    public function sendEmail()
    {


        //return 'ahahahaha';

        $members = Member::all();
        //$input['Testing Mail Spam Ksrp'] = $this->details['subject'];

        foreach ($members as $member) {
            $members['email'] = $member->email;
            $members['name'] = $member->name;
            \Mail::send('test', [], function($message) use($member){
                $message->to($member->email, $member->name)
                    ->subject("testing...");
            });
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
