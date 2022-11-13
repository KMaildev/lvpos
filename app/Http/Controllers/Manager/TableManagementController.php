<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatesubmitChangeNewTable;
use App\Models\OrderInfo;
use App\Models\TableList;
use Illuminate\Http\Request;

class TableManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_infos = OrderInfo::with('table_lists_table', 'users_table', 'customer_table')
            ->where('check_out_time', NULL)
            ->get();

        $table_lists = TableList::all();
        return view('manager.table_management.index', compact('order_infos', 'table_lists'));
    }


    public function getCurrentTable($id)
    {
        $order_info = OrderInfo::with('table_lists_table')
            ->findOrFail($id);
        return response()->json([
            'order_info' => $order_info
        ]);
    }


    public function submitChangeNewTable(UpdatesubmitChangeNewTable $request)
    {
        $order_info_id = $request->order_info_id;
        $order_info = OrderInfo::findOrFail($order_info_id);
        $order_info->table_list_id = $request->table_list_id;
        $order_info->update();
        return redirect()->back()->with('success', 'Your processing has been completed.');
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
