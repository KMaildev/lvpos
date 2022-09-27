<?php

namespace App\Http\Controllers\Counter;

use App\Http\Controllers\Controller;
use App\Models\BillInfo;
use App\Models\OrderInfo;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CompletedOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('counter.completed_order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order_info = OrderInfo::findOrFail($id);
        $order_items = OrderItem::where('order_info_id', $id)
            ->get();

        $bill_info = BillInfo::where('order_info_id', $id)
            ->first();
        $viewRender = view('counter.completed_order.invoice', compact('order_info', 'order_items', 'bill_info'))->render();

        return response()->json([
            'order_infos' => $id,
            'html' => $viewRender
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getOrderInfo(Request $request)
    {
        $keyword = $request->keyword;
        $order_infos = OrderInfo::with('table_lists_table', 'users_table')
            ->whereNotNull('check_out_time')
            ->get();

        if ($keyword) {
            $order_infos = OrderInfo::with('table_lists_table', 'users_table')
                ->whereNotNull('check_out_time')
                ->whereRelation('table_lists_table', 'table_name', 'like', '%' . $keyword . '%')
                ->get();
        }
        return response()->json([
            'order_infos' => $order_infos
        ]);
    }
}
