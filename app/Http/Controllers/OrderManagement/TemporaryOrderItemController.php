<?php

namespace App\Http\Controllers\OrderManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTemporaryOrderItem;
use App\Models\TemporaryOrderItem;
use Illuminate\Http\Request;

class TemporaryOrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session_id = session()->getId();
        $user_id = auth()->user()->id ?? 0;
        $temporary_order_items = TemporaryOrderItem::with('menu_lists_table')
            ->orderBy('id')
            ->where('session_id', $session_id)
            ->where('user_id', $user_id)
            ->get();


        return response()->json([
            'temporary_order_items' => $temporary_order_items
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
    public function store(StoreTemporaryOrderItem $request)
    {

        // Already Item 
        $already_item = TemporaryOrderItem::updateOrCreate(
            [
                'menu_list_id' => $request->menu_list_id,
                'session_id' => session()->getId(),
                'user_id' => auth()->user()->id ?? 0,
            ]
        );
        $already_qty = $already_item->qty ?? 0;

        // Update Or Create 
        TemporaryOrderItem::updateOrCreate(
            [
                'menu_list_id' => $request->menu_list_id,
                'session_id' => session()->getId(),
                'user_id' => auth()->user()->id ?? 0,
            ],
            [
                'menu_list_id' => $request->menu_list_id,
                'qty' => 1,
                'price' => $request->price,
                'remark' => '',
                'session_id' => session()->getId(),
                'user_id' => auth()->user()->id ?? 0,
            ],
        )->increment('qty', $already_qty);

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

    public function removeTemporaryOrderItem($id = null)
    {
        $remove = TemporaryOrderItem::findOrFail($id);
        $remove->delete();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }
}
