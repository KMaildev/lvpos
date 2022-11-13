<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CurrentOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.current_order.index');
    }


    public function getManagerCurrentOrder(Request $request)
    {
        $order_items = OrderItem::whereDate('created_at', Carbon::today())
            ->with('order_info_table', 'user_table', 'menu_lists_table')
            // ->where('preparation_status', 'Preparation')
            // ->orWhereNull('preparation_status')
            ->orderBy('menu_list_id', 'DESC')
            ->get();


        $keyword = $request->keyword;
        if ($keyword) {
            $order_items = OrderItem::whereDate('created_at', Carbon::today())
                ->with('order_info_table', 'user_table', 'menu_lists_table')
                // ->where('preparation_status', 'Preparation')
                // ->orWhereNull('preparation_status')
                ->whereRelation('menu_lists_table', 'name', 'like', '%' . $keyword . '%')
                ->orderBy('menu_list_id', 'DESC')
                ->get();
        }

        $viewRender = view('manager.current_order.components.order_preparation', compact('order_items'))->render();

        return response()->json([
            'html' => $viewRender
        ]);
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
}
