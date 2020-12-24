<?php

namespace App\Exports;

use App\PaymentTransaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// class PaymentTransactionsExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return PaymentTransaction::all();
//     }
// }

class PaymentTransactionsExport implements FromView
{
    public function view(): View
    {
        return view('payment_table', [
            'payments' => PaymentTransaction::all()
        ]);
    }
}
