<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTableList;
use App\Http\Requests\UpdateTableList;
use App\Models\Floor;
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
        $table_lists = TableList::all();
        return view('management.table_lists.index', compact('table_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $floors = Floor::all();
        return view('management.table_lists.create', compact('floors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTableList $request)
    {
        if ($request->hasFile('table_icon')) {
            $table_icon = $request->file('table_icon');
            $table_icon_path = $table_icon->store('public/table_icons');
        }
        $table_list = new TableList();
        $table_list->floor_id = $request->floor_id;
        $table_list->table_name = $request->table_name;
        $table_list->table_icon = $table_icon_path ?? '';
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
        return view('management.table_lists.edit', compact('table_list', 'floors'));
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
        if ($request->hasFile('table_icon')) {
            $table_icon = $request->file('table_icon');
            $table_icon_path = $table_icon->store('public/table_icons');
        }
        $table_list = TableList::findOrFail($id);
        $table_list->floor_id = $request->floor_id;
        $table_list->table_name = $request->table_name;
        $table_list->table_icon = $table_icon_path ?? $table_list->table_icon;
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
