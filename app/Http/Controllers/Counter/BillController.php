<?php

namespace App\Http\Controllers\Counter;

use App\Http\Controllers\Controller;
use App\Models\BillInfo;
use App\Models\OrderInfo;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Store Bill Info 
        $bill_info = new BillInfo();
        $bill_info->total_amount = $request->amount;
        $bill_info->bill_date = date('d/M/Y');
        $bill_info->bill_time = date('h:i:s A');
        $bill_info->bill_date_time = date('Y-m-d h:i:s A');
        $bill_info->order_info_id = $request->order_info_id ?? 0;
        $bill_info->user_id = auth()->user()->id ?? 0;
        $bill_info->save();

        $order_info_id = $request->order_info_id ?? 0;
        $order_info = OrderInfo::findOrFail($order_info_id);
        $order_info->check_out_time = date('Y-m-d h:i:s A');
        $order_info->check_out_status = 'finished';
        $order_info->update();

        return response()->json([
            "statusCode" => 200,
            'procress' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
