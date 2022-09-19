<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMainCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_categories = MainCategory::all();
        return view('management.main_category.index', compact('main_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.main_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMainCategory $request)
    {
        $main_category = new MainCategory();
        $main_category->title = $request->title;
        $main_category->type = $request->type;
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
        $main_category = MainCategory::findOrFail($id);
        return view('management.main_category.edit', compact('main_category'));
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
        $main_category = MainCategory::findOrFail($id);
        $main_category->title = $request->title;
        $main_category->type = $request->type;
        $main_category->update();
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
        $main_category = MainCategory::findOrFail($id);
        $main_category->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
