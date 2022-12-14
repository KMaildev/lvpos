<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIngredients;
use App\Http\Requests\UpdateIngredients;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredients::query();
        if (request('search')) {
            $ingredients->where('name', 'Like', '%' . request('search') . '%');
        }
        $ingredients = $ingredients->orderBy('id', 'ASC')->get();
        return view('management.ingredients.index', compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngredients $request)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_path = $photo->store('public/images');
        }
        $menu_list = new Ingredients();
        $menu_list->name = $request->name;
        $menu_list->unit = $request->unit;
        $menu_list->photo = $photo_path ?? '';
        $menu_list->user_id =  auth()->user()->id ?? 0;
        $menu_list->save();
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
        $ingredient = Ingredients::findOrFail($id);
        return view('management.ingredients.edit', compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIngredients $request, $id)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_path = $photo->store('public/images');
        }
        $ingredient = Ingredients::findOrFail($id);
        $ingredient->name = $request->name;
        $ingredient->unit = $request->unit;
        $ingredient->photo = $photo_path ?? $ingredient->photo;
        $ingredient->user_id =  auth()->user()->id ?? 0;
        $ingredient->save();
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
        $category = Ingredients::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function getIngredients($id = null)
    {
        $ingredient = Ingredients::findOrFail($id);
        return json_encode($ingredient);
    }
}
