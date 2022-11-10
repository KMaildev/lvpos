@extends('layouts.menus.hr')
@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">
                    Permission
                </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <i class="fa fa-table"></i>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Permission</li>
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
            <div class="col-xl-12 col-lg-12 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex mb-3">
                            <div class="ms-auto">
                                <a href="{{ route('permission.create') }}" class="waves-effect waves-light btn btn-info">
                                    <i class="fa fa-plus-circle"></i>
                                    Create
                                </a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="tablebg">
                                        <th class="text-center" style="width: 1%;">#</th>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center" style="width: 5%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permission as $key => $value)
                                        <tr>

                                            <td class="text-center">
                                                {{ $key + 1 }}
                                            </td>

                                            <td class="text-center">
                                                {{ $value->name ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $value->status ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                <div class="list-icons d-inline-flex">
                                                    <div class="list-icons-item dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle"
                                                            data-bs-toggle="dropdown">
                                                            <i class="fa fa-gear"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            <a href="{{ route('permission.edit', $value->id) }}"
                                                                class="dropdown-item">
                                                                <i class="fa fa-edit"></i>
                                                                Edit Data
                                                            </a>

                                                            <form action="{{ route('permission.destroy', $value->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="dropdown-item del_confirm"
                                                                    id="confirm-text" data-toggle="tooltip">Delete</button>
                                                            </form>

                                                        </div>
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
        </div>
    </section>
@endsection
