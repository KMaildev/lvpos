<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuIngredients;
use App\Models\Ingredients;
use App\Models\MenuIngredients;
use App\Models\MenuList;
use Illuminate\Http\Request;

class MenuIngredientsController extends Controller
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
    public function store(StoreMenuIngredients $request)
    {
        $menu_ingredients = new MenuIngredients();
        $menu_ingredients->no_of_unit = $request->no_of_unit;
        $menu_ingredients->price = $request->price;
        $menu_ingredients->ingredient_id = $request->ingredient_id;
        $menu_ingredients->user_id = auth()->user()->id ?? 0;
        $menu_ingredients->save();
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

    public function createMenuIngredient($id = null)
    {
        $menu_list = MenuList::findOrFail($id);
        $ingredients = Ingredients::all();
        return view('management.menu_ingredient.create', compact('menu_list', 'ingredients'));
    }
}
