@extends('layouts.menus.management')
@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">
                    Floor
                </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <i class="fa fa-table"></i>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Floor</li>
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
                                <a href="{{ route('floor.create') }}" class="waves-effect waves-light btn btn-info">
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
                                        <th class="text-center" style="width: 5%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($floors as $key => $value)
                                        <tr>

                                            <td class="text-center">
                                                {{ $key + 1 }}
                                            </td>

                                            <td class="text-center">
                                                {{ $value->title }}
                                            </td>

                                            <td class="text-center">
                                                <div class="list-icons d-inline-flex">
                                                    <div class="list-icons-item dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle"
                                                            data-bs-toggle="dropdown">
                                                            <i class="fa fa-gear"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            <a href="{{ route('floor.edit', $value->id) }}"
                                                                class="dropdown-item">
                                                                <i class="fa fa-edit"></i>
                                                                Edit Data
                                                            </a>

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
