<?php

namespace App\Http\Controllers\Conponents;

use App\Http\Controllers\Controller;
use App\Models\OrderInfo;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use PDF;

class InvoicePdfController extends Controller
{

    public function InvoicePDFDownload($id)
    {
        $order_info = OrderInfo::findOrFail($id);
        $order_items = OrderItem::where('order_info_id', $id)
            ->get();

        // return view('counter.completed_order.show', compact('order_info', 'order_items'));

        $data = [
            'order_info' => $order_info,
            'order_items' => $order_items,
        ];
        $pdf = PDF::loadView('pdf.invoice_pdf', $data);
        return $pdf->stream('invoice_pdf.pdf');
    }
}
