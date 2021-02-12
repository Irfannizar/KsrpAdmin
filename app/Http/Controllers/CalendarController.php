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
use Calendar;

class CalendarController extends Controller
{
    //
    public function calendar()
    {
        $events = [];
        $data = Event::all();
        //return $data;
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#1cc88a','#1cc88a', '#36b9cc','#f6c23e','#4e73df','#1cc88a',
	                    
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        //return $key;
        return view('calendar', compact('calendar'));
    }
    
}
