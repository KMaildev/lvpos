@extends('layouts.menus.management')
@section('content')
    <section class="content">
        <div class="row">
            <div class="card" style="background-color:#8dd6c5;">
                <div class="card-header">
                    <h4 class="card-title">
                        Ingredients
                    </h4>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('ingredients.create') }}" class="waves-effect waves-light btn btn-danger">
                            <i class="fa fa-plus"></i>
                            Create New
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xxxl-12 col-xl-12 col-lg-12 col-12">
                <form action="{{ route('ingredients.index') }}" method="GET">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                </form>
            </div>

            @foreach ($ingredients as $ingredient)
                <div class="col-xxxl-3 col-xl-3 col-lg-6 col-12">
                    <div class="box food-box">
                        <div class="box-body text-center">
                            <div class="menu-item">
                                @if ($ingredient->photo)
                                    <img src="{{ Storage::url($ingredient->photo) }}" class="img-fluid w-p75"
                                        style="width: 140px; height: 140px; background-size: center; object-fit: cover; border-radius: 50%; border: 1px solid rgb(215, 213, 213);" />
                                @else
                                    <img src="{{ asset('data/noimage.png') }}" class="img-fluid w-p75"
                                        style="width: 140px; height: 140px; background-size: center; object-fit: cover; border-radius: 50%; border: 1px solid rgb(215, 213, 213);" />
                                @endif
                            </div>

                            <div class="menu-details text-center">
                                <h5 class="mt-20 mb-10">
                                    {{ $ingredient->name ?? '' }}
                                </h5>
                                <p>
                                    Unit: {{ $ingredient->unit ?? '' }}
                                </p>
                            </div>

                            <div class="act-btn d-flex justify-content-center">

                                <div class="text-center mx-5">
                                    <a href="{{ route('ingredients.edit', $ingredient->id) }}"
                                        class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <small class="d-block">
                                        Edit
                                    </small>
                                </div>

                                <div class="text-center mx-5">
                                    <form action="{{ route('ingredients.destroy', $ingredient->id) }}" method="POST">
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
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
