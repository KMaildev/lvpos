<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTableList;
use App\Http\Requests\UpdateTableList;
use App\Models\Floor;
use App\Models\TableIcon;
use App\Models\TableList;
use Illuminate\Http\Request;

class TableListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors = Floor::all();
        $table_lists = TableList::all();
        return view('management.table_lists.index', compact('table_lists', 'floors'));
    }

    public function getByFloorCategory($id)
    {
        $floors = Floor::all();
        $table_lists = TableList::where('floor_id', $id)->get();
        return view('management.table_lists.index', compact('table_lists', 'floors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $floors = Floor::all();
        $table_icon = TableIcon::all();
        return view('management.table_lists.create', compact('floors', 'table_icon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTableList $request)
    {
        $table_list = new TableList();
        $table_list->floor_id = $request->floor_id;
        $table_list->table_name = $request->table_name;
        $table_list->table_icon = $request->table_icon ?? '';
        $table_list->reservation = $request->reservation;
        $table_list->save();
        return redirect()->back()->with('success', 'Your processing has been completed.');
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
        $table_list = TableList::findOrFail($id);
        $floors = Floor::all();
        $table_icon = TableIcon::all();
        return view('management.table_lists.edit', compact('table_list', 'floors', 'table_icon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTableList $request, $id)
    {
        $table_list = TableList::findOrFail($id);
        $table_list->floor_id = $request->floor_id;
        $table_list->table_name = $request->table_name;
        $table_list->table_icon = $request->table_icon ?? $table_list->table_icon;
        $table_list->reservation = $request->reservation;
        $table_list->update();
        return redirect()->back()->with('success', 'Your processing has been completed.');
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
