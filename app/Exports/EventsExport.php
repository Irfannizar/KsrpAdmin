<?php

namespace App\Exports;

use App\Event;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// class EventsExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Event::all();
//     }
// }


class EventsExport implements FromView
{
    public function view(): View
    {
        return view('event_table', [
            'events' => Event::all()
        ]);
    }
}