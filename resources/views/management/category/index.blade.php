@extends('layouts.menus.management')
@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">
                    Category
                </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <i class="fa fa-table"></i>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Category</li>
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
                        Category
                    </h4>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('category.create') }}" class="waves-effect waves-light btn btn-info">
                            <i class="fa fa-plus"></i>
                            Create New
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-12 col-sm-12 py-5">
                    <div class="table-responsive rounded card-table">
                        <table class="table border-no mydatatable">
                            <thead>
                                <tr class="tablebg">
                                    <th class="text-center" style="width: 1%;">#</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Unit</th>
                                    <th class="text-center">Main Category</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <td class="text-center">
                                            {{ $key + 1 }}
                                        </td>

                                        <td class="text-center">
                                            {{ $category->title ?? '' }}
                                        </td>

                                        <td class="text-center">
                                            {{ $category->unit ?? '' }}
                                        </td>

                                        <td class="text-center">
                                            {{ $category->main_category_table->title ?? '' }}
                                        </td>

                                        <td class="text-center">
                                            {{ $category->main_category_table->type ?? '' }}
                                        </td>

                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('category.edit', $category->id) }}">
                                                        <i class="fa fa-edit"></i>
                                                        Edit
                                                    </a>

                                                    <form action="{{ route('category.destroy', $category->id) }}"
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
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
