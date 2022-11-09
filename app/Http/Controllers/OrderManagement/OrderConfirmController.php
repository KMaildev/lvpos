<?php

namespace App\Http\Controllers\OrderManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderInfo;
use App\Models\OrderInfo;
use App\Models\OrderItem;
use App\Models\TemporaryOrderItem;
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
    public function store(StoreOrderInfo $request)
    {
        $countOrderInfo = OrderInfo::count();
        $order_no = sprintf('%06d', $countOrderInfo + 1);
        $bill_no = sprintf('B' . '%05d', $countOrderInfo + 1);


        $order_infos_check = OrderInfo::where('table_list_id', $request->table_list_id)
            ->where('check_out_time', NULL)
            ->where('check_out_status', NULL)
            ->first();

        $order_info = OrderInfo::updateOrCreate(
            [
                'table_list_id' => $request->table_list_id,
                'check_out_time' => NULL,
                'check_out_status' => NULL,
            ],
            [
                'customer_id' => $request->customer_id ?? 0,
                'table_list_id' => $request->table_list_id,
                'order_date' => date('Y-m-d h:i:s A'),
                'check_in_time' => date('Y-m-d h:i:s A'),
                'check_out_time' => null,
                'user_id' => auth()->user()->id ?? 0,
                'order_no' => $order_infos_check->order_no ?? $order_no,
                'bill_no' => $order_infos_check->bill_no ?? $bill_no,
            ],
        );
        $order_info_id = $order_info->id;

        // Order Items 
        $session_id = session()->getId();
        $user_id = auth()->user()->id ?? 0;
        $temporary_order_items = TemporaryOrderItem::where('session_id', $session_id)
            ->where('user_id', $user_id)
            ->get();

        foreach ($temporary_order_items as $key => $value) {
            OrderItem::create([
                'menu_list_id' => $value['menu_list_id'],
                'qty' => $value['qty'],
                'price' => $value['price'],
                'remark' => $value['remark'],
                'order_info_id' => $order_info_id,
                'user_id' => $user_id,
            ]);
        }

        $temporary_order_items = TemporaryOrderItem::where('session_id', $session_id)
            ->where('user_id', $user_id)
            ->delete();

        return json_encode(array(
            "statusCode" => 200,
        ));
    }


    public function store_backup_no_use(StoreOrderInfo $request)
    {
        $countOrderInfo = OrderInfo::count();
        $order_no = sprintf('%06d', $countOrderInfo + 1);
        $bill_no = sprintf('B' . '%05d', $countOrderInfo + 1);

        // Order Info
        $order_info = new OrderInfo();
        $order_info->customer_id = $request->customer_id ?? 0;
        $order_info->table_list_id = $request->table_list_id;
        $order_info->order_date = date('Y-m-d h:i:s A');
        $order_info->check_in_time = date('Y-m-d h:i:s A');
        $order_info->check_out_time = null;
        $order_info->user_id = auth()->user()->id ?? 0;
        $order_info->order_no = $order_no;
        $order_info->bill_no = $bill_no;
        $order_info->save();
        $order_info_id = $order_info->id;


        // Order Items 
        $session_id = session()->getId();
        $user_id = auth()->user()->id ?? 0;
        $temporary_order_items = TemporaryOrderItem::where('session_id', $session_id)
            ->where('user_id', $user_id)
            ->get();

        foreach ($temporary_order_items as $key => $value) {
            OrderItem::create([
                'menu_list_id' => $value['menu_list_id'],
                'qty' => $value['qty'],
                'price' => $value['price'],
                'remark' => $value['remark'],
                'order_info_id' => $order_info_id,
                'user_id' => $user_id,
            ]);
        }

        $temporary_order_items = TemporaryOrderItem::where('session_id', $session_id)
            ->where('user_id', $user_id)
            ->delete();

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
