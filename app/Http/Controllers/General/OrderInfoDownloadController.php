<?php

namespace App\Http\Controllers\General;

use App\Exports\OrderInfoExport;
use App\Http\Controllers\Controller;
use App\Models\OrderInfo;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class OrderInfoDownloadController extends Controller
{
    public function ManagerOrderListsPdf()
    {
        $order_infos = OrderInfo::with('table_lists_table', 'users_table', 'customer_table', 'check_out_users_table')
            // ->where('check_out_status', 'finished')
            ->get();
        $data = [
            'order_infos' => $order_infos,
        ];
        $pdf = PDF::loadView('pdf.invoice.manager_order_lists', $data);
        return $pdf->stream('order_list.pdf');
    }


    public function ManagerOrderListsExcel()
    {
        $order_infos = OrderInfo::with('table_lists_table', 'users_table', 'customer_table', 'check_out_users_table')
            // ->where('check_out_status', 'finished')
            ->get();

        return Excel::download(new OrderInfoExport($order_infos), 'order_list_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
