<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuLists;
use App\Http\Requests\UpdateMenuLists;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\MenuList;
use Illuminate\Http\Request;

class MenuListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_lists = MenuList::query();
        if (request('search')) {
            $menu_lists->where('name', 'Like', '%' . request('search') . '%');
        }
        $menu_lists = $menu_lists->orderBy('id', 'ASC')->get();
        return view('management.menu_lists.index', compact('menu_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('management.menu_lists.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuLists $request)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_path = $photo->store('public/images');
        }
        $menu_list = new MenuList();
        $menu_list->name = $request->name;
        $menu_list->price = $request->price;
        $menu_list->photo = $photo_path ?? 'public/images/noimage.png';
        $menu_list->categorie_id = $request->categorie_id;
        $menu_list->main_categorie_id = $request->main_categorie_id;
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
        $categories = Category::all();
        $menu_list = MenuList::findOrFail($id);
        return view('management.menu_lists.edit', compact('categories', 'menu_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuLists $request, $id)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_path = $photo->store('public/images');
        }
        $menu_list = MenuList::findOrFail($id);
        $menu_list->name = $request->name;
        $menu_list->price = $request->price;
        $menu_list->photo = $photo_path ?? $menu_list->photo;
        $menu_list->categorie_id = $request->categorie_id;
        $menu_list->main_categorie_id = $request->main_categorie_id;
        $menu_list->user_id =  auth()->user()->id ?? 0;
        $menu_list->update();
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
        $category = MenuList::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
