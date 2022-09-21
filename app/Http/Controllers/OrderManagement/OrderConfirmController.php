<?php

namespace App\Http\Controllers\OrderManagement;

use App\Http\Controllers\Controller;
use App\Models\OrderInfo;
use Illuminate\Http\Request;

class OrderConfirmController extends Controller
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
        $order_info = new OrderInfo();
        $order_info->customer_id = $request->customer_id ?? 0;
        $order_info->table_list_id = $request->table_list_id;
        $order_info->order_date = date('Y-m-d h:i:s A');
        $order_info->check_in_time = date('Y-m-d h:i:s A');
        $order_info->check_out_time = null;
        $order_info->user_id = auth()->user()->id ?? 0;
        $order_info->save();

        return json_encode(array(
            "statusCode" => 200,
        ));
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
