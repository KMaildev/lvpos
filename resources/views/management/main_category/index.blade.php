@extends('layouts.menus.management')
@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">
                    Main Category
                </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <i class="fa fa-table"></i>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Main Category</li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Lists
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Main Category
                    </h4>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('main_category.create') }}" class="waves-effect waves-light btn btn-info">
                            <i class="fa fa-plus"></i>
                            Create New
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mb-20">
            <div class="row ">
                <div class="col-md-6">
                    <ul class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active"
                            style="background-color: #03184A; color: white;">
                            Food
                        </a>
                        @foreach ($main_categories as $main_categorie)
                            @if ($main_categorie->type == 'food')
                                <li class="list-group-item d-flex justify-content-between align-items-center"
                                    style="color:black;">
                                    {{ $main_categorie->title ?? '' }}

                                    <span class="badge bg-primary">
                                        <div class="btn-group">
                                            <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h text-white"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('main_category.edit', $main_categorie->id) }}">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>

                                                <form action="{{ route('main_category.destroy', $main_categorie->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item del_confirm"
                                                        id="confirm-text">
                                                        <i class="fa fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-6">
                    <ul class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active"
                            style="background-color: #03184A; color: white;">
                            Bar
                        </a>
                        @foreach ($main_categories as $main_categorie)
                            @if ($main_categorie->type == 'bar')
                                <li class="list-group-item d-flex justify-content-between align-items-center"
                                    style="color:black;">
                                    {{ $main_categorie->title ?? '' }}
                                    <span class="badge bg-primary">
                                        <div class="btn-group">
                                            <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h text-white"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('main_category.edit', $main_categorie->id) }}">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>

                                                <form action="{{ route('main_category.destroy', $main_categorie->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item del_confirm"
                                                        id="confirm-text">
                                                        <i class="fa fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
