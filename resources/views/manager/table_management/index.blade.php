@extends('layouts.menus.manager')
@section('content')
    <section class="content">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Table List
                    </h4>
                </div>
            </div>

            @foreach ($table_lists as $table_list)
                <div class="col-xxxl-3 col-lg-3 col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="d-flex align-items-start">
                                <div>
                                    @if ($table_list->table_icon)
                                        <img src="{{ Storage::url($table_list->table_icon) }}" class="w-80 me-20"
                                            style="width: 100%; height: auto; background-size: center; object-fit: cover;" />
                                    @else
                                        <img src="{{ asset('data/noimage.png') }}" class="w-80 me-20"
                                            style="width: 100%; height: auto; background-size: center; object-fit: cover;" />
                                    @endif
                                </div>
                                <div>
                                    <h2 class="my-0 fw-700">
                                        {{ $table_list->table_name ?? '' }}
                                    </h2>
                                    <p class="text-fade mb-0">
                                        {{ $table_list->floor_table->title ?? '' }}
                                    </p>
                                    <p class="fs-12 mb-0 text-success">
                                        <span class="badge badge-pill badge-success-light me-5">
                                            <i class="fa fa-users"></i>
                                        </span>
                                        No of {{ $table_list->reservation ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
