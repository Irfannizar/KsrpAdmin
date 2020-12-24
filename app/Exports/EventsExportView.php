<?php

namespace App\Exports;

use App\Event;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;

class EventsExportView implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(): View
    {
        return view('event_table', [
            'events' => Event::all()
        ]);
    }
}
