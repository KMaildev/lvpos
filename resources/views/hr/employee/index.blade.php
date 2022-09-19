@extends('layouts.menus.hr')
@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">
                    Employees
                </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <i class="fa fa-table"></i>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Employees</li>
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
            <div class="col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex mb-3">
                            <div class="ms-auto">
                                <a href="{{ route('employee.create') }}" class="waves-effect waves-light btn btn-info">
                                    <i class="fa fa-plus-circle"></i>
                                    Create
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive rounded card-table">
                            <table class="table border-no mydatatable">
                                <thead>
                                    <tr class="tablebg">
                                        <th class="text-center" style="width: 1%;">#</th>
                                        <th class="text-center">Photo</th>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Department</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $key => $value)
                                        <tr class="hover-primary">
                                            <td style="text-align: center;">
                                                {{ $key + 1 }}
                                            </td>

                                            <td>
                                                @if ($value->passport_photo)
                                                    <img src="{{ Storage::url($value->passport_photo) }}" alt=""
                                                        style="width: 30px; height: 30px; background-position: center; background-size: contain, cover;">
                                                @endif
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $value->employee_id }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $value->name }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $value->email }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $value->phone }}
                                            </td>

                                            <td></td>

                                            <td style="text-align: center;">
                                                {{ $value->department->title ?? '' }}
                                            </td>

                                            <td style="text-align: center;">
                                                <div class="btn-group">
                                                    <a class="hover-primary dropdown-toggle no-caret"
                                                        data-bs-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('employee.edit', $value->id) }}">
                                                            Edit
                                                        </a>
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
