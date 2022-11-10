<?php

namespace App\Http\Controllers\Counter;

use App\Http\Controllers\Controller;
use App\Models\OrderInfo;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CompletedCounterOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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

        return view('counter.completed_order.index', compact('order_infos'));
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

        return view('counter.completed_order.show', compact('order_info', 'order_items'));
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
}
