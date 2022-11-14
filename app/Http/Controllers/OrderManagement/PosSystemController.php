<?php

namespace App\Http\Controllers\OrderManagement;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Floor;
use App\Models\MenuList;
use App\Models\TableList;
use Illuminate\Http\Request;

class PosSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $table_lists = TableList::all();
        $floors = Floor::all();
        return view('order_management.pos_system.index', compact('categories', 'table_lists', 'floors'));
    }



    public function getMenuList(Request $request)
    {
        $keyword = $request->keyword;
        $menu_lists = MenuList::query();
        if ($keyword) {
            $menu_lists->where('name', 'Like', '%' . $keyword . '%');
        }

        $menu_lists = $menu_lists->orderBy('id', 'ASC')->get();

        return response()->json([
            'menu_lists' => $menu_lists
        ]);
    }


    public function getSearchByCategory(Request $request)
    {
        $category_id = $request->category_id;
        $menu_lists = MenuList::query();
        if ($category_id) {
            $menu_lists->where('categorie_id', 'Like', '%' . $category_id . '%');
        }

        $menu_lists = $menu_lists->orderBy('id', 'ASC')->get();

        return response()->json([
            'menu_lists' => $menu_lists
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
