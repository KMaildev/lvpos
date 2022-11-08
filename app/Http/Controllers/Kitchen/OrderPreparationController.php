<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Http\Requests\updateAllItemStatus;
use App\Http\Requests\updateOrderPreparationStatus;
use App\Models\OrderInfo;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderPreparationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kitchen.order_preparation.index');
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

    public function getOrderInfoPreparation(Request $request)
    {
        $order_items = OrderItem::with('order_info_table', 'user_table')
            ->where('preparation_status', 'Preparation')
            ->orWhereNull('preparation_status')
            ->orderBy('menu_list_id', 'DESC')
            ->get();

        $viewRender = view('kitchen.order_preparation.components.order_preparation', compact('order_items'))->render();

        return response()->json([
            'html' => $viewRender
        ]);
    }


    public function updateOrderPreparationStatus(updateOrderPreparationStatus $request)
    {
        $order_item_id = $request->order_item_id;
        $order_item = OrderItem::findOrFail($order_item_id);
        $order_item->preparation_date = date('Y-m-d h:i:s A');
        $order_item->preparation_status = $request->order_status;
        $order_item->preparation_user_id = auth()->user()->id ?? 0;

        $order_item->difference_time = $order_item->created_at->diffInMinutes(Carbon::now());

        $order_item->update();
        return response()->json([
            "statusCode" => 200,
            'procress' => 'success',
        ]);
    }


    public function updateAllItemStatus(updateAllItemStatus $request)
    {
        $order_info_id = $request->order_info_id;
        OrderItem::where('order_info_id', $order_info_id)->update(
            [
                'preparation_status' => $request->order_status,
                'preparation_user_id' => auth()->user()->id ?? 0,
                'preparation_date' => date('Y-m-d h:i:s A'),
            ]
        );

        if ($request->order_status == 'Done') {
            $order_info = OrderInfo::findOrFail($order_info_id);
            $order_info->order_preparation_status = $request->order_status;
            $order_info->order_preparation_date = date('Y-m-d h:i:s A');
            $order_info->preparation_date = date('Y-m-d');
            $order_info->order_preparation_user_id = auth()->user()->id ?? 0;
            $order_info->update();
        }

        return response()->json([
            "statusCode" => 200,
            'procress' => 'success',
        ]);
    }
}
