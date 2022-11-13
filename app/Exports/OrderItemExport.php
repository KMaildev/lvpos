<?php

namespace App\Exports;

use App\Models\OrderItem;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class OrderItemExport implements FromView
{
    public function __construct($order_items)
    {
        $this->order_items = $order_items;
    }

    public function view(): View
    {
        return view('excel.order_item_excel', [
            'order_items' => $this->order_items,
        ]);
    }
}
