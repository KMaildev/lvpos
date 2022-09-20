<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\UpdateCategory;
use App\Models\Category;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('management.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_categoryies = MainCategory::all();
        return view('management.category.create', compact('main_categoryies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $main_category = new Category();
        $main_category->title = $request->title;
        $main_category->unit = $request->unit;
        $main_category->main_categorie_id = $request->main_categorie_id;
        $main_category->save();
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
        $category = Category::findOrFail($id);
        $main_categoryies = MainCategory::all();
        return view('management.category.edit', compact('main_categoryies', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->unit = $request->unit;
        $category->main_categorie_id = $request->main_categorie_id;
        $category->update();
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
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function getCategoryWithMainCategory($id = null)
    {
        $category = Category::findOrFail($id);
        $main_categorie_id = $category->main_categorie_id;
        $main_categories = MainCategory::findOrFail($main_categorie_id);
        return json_encode($main_categories);
    }
}
