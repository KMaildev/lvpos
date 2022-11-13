<?php

namespace App\Http\Controllers\General;

use App\Exports\OrderItemExport;
use App\Http\Controllers\Controller;
use App\Models\OrderInfo;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class OrderItemController extends Controller
{

    public function updateManagerRemark(Request $request)
    {
        $id = $request->id;
        $value = $request->value;

        $temp = OrderItem::findOrFail($id);
        $temp->manager_remark = $value;
        $temp->update();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }


    public function getManagerCurrentOrderPdf()
    {
        $order_items = OrderItem::whereDate('created_at', Carbon::today())
            ->with('order_info_table', 'user_table', 'menu_lists_table')
            ->orderBy('menu_list_id', 'DESC')
            ->get();

        $data = [
            'order_items' => $order_items,
        ];
        $pdf = PDF::loadView('pdf.order_item_pdf', $data);
        return $pdf->stream('document.pdf');
    }


    public function getManagerCurrentOrderExcel()
    {
        $order_items = OrderItem::whereDate('created_at', Carbon::today())
            ->with('order_info_table', 'user_table', 'menu_lists_table')
            ->orderBy('menu_list_id', 'DESC')
            ->get();

        return Excel::download(new OrderItemExport($order_items), 'order_items_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
