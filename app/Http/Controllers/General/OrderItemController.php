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
        return $pdf->stream('order_items.pdf');
    }


    public function getManagerCurrentOrderExcel()
    {
        $order_items = OrderItem::whereDate('created_at', Carbon::today())
            ->with('order_info_table', 'user_table', 'menu_lists_table')
            ->orderBy('menu_list_id', 'DESC')
            ->get();

        return Excel::download(new OrderItemExport($order_items), 'order_items_' . date("Y-m-d H:i:s") . '.xlsx');
    }


    // order_preparation
    public function getKitchenOrderPreparationPdf()
    {
        $order_items = OrderItem::with('order_info_table', 'user_table')
            ->where('preparation_status', 'Preparation')
            ->orWhereNull('preparation_status')
            ->orderBy('menu_list_id', 'DESC')
            ->get();


        $data = [
            'order_items' => $order_items,
        ];
        $pdf = PDF::loadView('pdf.order_item_pdf', $data);
        return $pdf->stream('order_items.pdf');
    }


    public function getKitchenOrderPreparationExcel()
    {
        $order_items = OrderItem::with('order_info_table', 'user_table')
            ->where('preparation_status', 'Preparation')
            ->orWhereNull('preparation_status')
            ->orderBy('menu_list_id', 'DESC')
            ->get();

        return Excel::download(new OrderItemExport($order_items), 'order_items_' . date("Y-m-d H:i:s") . '.xlsx');
    }

    // Order Done 
    public function getKitchenOrderDonePdf()
    {
        $order_items = OrderItem::with('order_info_table', 'user_table')
            ->whereIn('preparation_status', ['Done', 'Reject'])
            ->where('updated_at', '>=', Carbon::today())
            ->orderBy('menu_list_id', 'DESC')
            ->get();


        $data = [
            'order_items' => $order_items,
        ];
        $pdf = PDF::loadView('pdf.order_item_pdf', $data);
        return $pdf->stream('order_items.pdf');
    }


    public function getKitchenOrderDoneExcel()
    {
        $order_items = OrderItem::with('order_info_table', 'user_table')
            ->whereIn('preparation_status', ['Done', 'Reject'])
            ->where('updated_at', '>=', Carbon::today())
            ->orderBy('menu_list_id', 'DESC')
            ->get();

        return Excel::download(new OrderItemExport($order_items), 'order_items_' . date("Y-m-d H:i:s") . '.xlsx');
    }


    // all_order_done
    public function getKitchenOrderAllDonePdf()
    {
        $order_items = OrderItem::with('order_info_table', 'user_table')
            ->orderBy('menu_list_id', 'DESC')
            ->whereIn('preparation_status', ['Done', 'Reject'])
            ->get();


        $data = [
            'order_items' => $order_items,
        ];
        $pdf = PDF::loadView('pdf.order_item_pdf', $data);
        return $pdf->stream('order_items.pdf');
    }


    public function getKitchenAllOrderDoneExcel()
    {
        $order_items = OrderItem::with('order_info_table', 'user_table')
            ->orderBy('menu_list_id', 'DESC')
            ->whereIn('preparation_status', ['Done', 'Reject'])
            ->get();

        return Excel::download(new OrderItemExport($order_items), 'order_items_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
