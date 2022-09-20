@extends('layouts.menus.management')
@section('content')
    <section class="content">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Menu List
                    </h4>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('menu_list.create') }}" class="waves-effect waves-light btn btn-info">
                            <i class="fa fa-plus"></i>
                            Create New
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xxxl-12 col-xl-12 col-lg-12 col-12">
                <form action="{{ route('menu_list.index') }}" method="GET">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                </form>
            </div>

            @foreach ($menu_lists as $menu_list)
                <div class="col-xxxl-3 col-xl-3 col-lg-6 col-12">
                    <div class="box food-box">
                        <div class="box-body text-center">
                            <div class="menu-item">
                                @if ($menu_list->photo)
                                    <img src="{{ Storage::url($menu_list->photo) }}" class="img-fluid w-p75"
                                        style="width: 140px; height: 140px; background-size: center; object-fit: cover; border-radius: 50%; border: 1px solid rgb(215, 213, 213);" />
                                @else
                                    <img src="{{ asset('data/noimage.png') }}" class="img-fluid w-p75"
                                        style="width: 140px; height: 140px; background-size: center; object-fit: cover; border-radius: 50%; border: 1px solid rgb(215, 213, 213);" />
                                @endif
                            </div>

                            <div class="menu-details text-center">
                                <h5 class="mt-20 mb-10">
                                    {{ $menu_list->name ?? '' }}
                                </h5>
                                <p>
                                    {{ $menu_list->categories_table->title ?? '' }}
                                </p>
                            </div>

                            <div class="act-btn d-flex justify-content-between">

                                <div class="text-center mx-5">
                                    <a href="#"
                                        class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <small class="d-block">
                                        View
                                    </small>
                                </div>

                                <div class="text-center mx-5">
                                    <a href="{{ route('menu_list.edit', $menu_list->id) }}"
                                        class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <small class="d-block">
                                        Edit
                                    </small>
                                </div>

                                <div class="text-center mx-5">
                                    <form action="{{ route('menu_list.destroy', $menu_list->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#"
                                            class="del_confirm waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <small class="d-block">
                                            Delete
                                        </small>
                                    </form>
                                </div>

                                <div class="text-center mx-5">
                                    <a href="{{ route('create_menu_ingredient', $menu_list->id) }}"
                                        class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5">
                                        <i class="fa fa-plus-square-o"></i>
                                    </a>
                                    <small class="d-block">
                                        Ingredient
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
