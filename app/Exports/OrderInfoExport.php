<?php

namespace App\Exports;

use App\Models\OrderInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class OrderInfoExport implements FromView
{
    public function __construct($order_infos)
    {
        $this->order_infos = $order_infos;
    }

    public function view(): View
    {
        return view('excel.invoice.manager_order_lists', [
            'order_infos' => $this->order_infos,
        ]);
    }
}
