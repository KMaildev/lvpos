<?php

namespace App\Http\Controllers\OrderInfo;

use App\Http\Controllers\Controller;
use App\Models\OrderInfo;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderInfoController extends Controller
{

    public function getOrderInfoFinished(Request $request)
    {
        $keyword = $request->keyword;
        $order_infos = OrderInfo::with('table_lists_table', 'users_table', 'customer_table', 'check_out_users_table')
            ->where('check_out_status', 'finished')
            ->get();

        if ($keyword) {
            $order_infos = OrderInfo::with('table_lists_table', 'users_table', 'customer_table', 'check_out_users_table')
                ->where('check_out_status', 'finished')
                ->whereRelation('table_lists_table', 'table_name', 'like', '%' . $keyword . '%')
                ->get();
        }
        return response()->json([
            'order_infos' => $order_infos
        ]);
    }


    public function InvoiceOrderInfoFinished($id)
    {
        $order_info = OrderInfo::findOrFail($id);
        $order_items = OrderItem::where('order_info_id', $id)
            ->get();

        $viewRender = view('counter.completed_order.invoice', compact('order_info', 'order_items'))->render();
        return response()->json([
            'order_infos' => $id,
            'html' => $viewRender
        ]);
    }
}
