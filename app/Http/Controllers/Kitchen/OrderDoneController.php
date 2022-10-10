<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\OrderInfo;
use Illuminate\Http\Request;

class OrderDoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kitchen.order_done.index');
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

    public function getOrderInfoDone(Request $request)
    {
        $keyword = $request->keyword;
        $today = date('Y-m-d');
        $order_infos = OrderInfo::with('table_lists_table')
            ->where('preparation_date', $today)
            ->orderBy('id', 'DESC')
            ->get();

        if ($keyword) {
            $order_infos = OrderInfo::with('table_lists_table', 'order_items_table')
                ->where('preparation_date', $today)
                ->whereRelation('table_lists_table', 'table_name', 'like', '%' . $keyword . '%')
                ->get();
        }

        $viewRender = view('kitchen.order_done.components.order_done', compact('order_infos'))->render();

        return response()->json([
            'html' => $viewRender
        ]);
    }
}
