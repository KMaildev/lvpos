@extends('layouts.menus.manager')
@section('content')
    <section class="content">

        <div class="row">
            <div class="card" style="background-color:#8dd6c5;">
                <div class="card-header">
                    <h4 class="card-title">
                        Completed
                    </h4>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <div class="btn-group">
                            <button class="waves-effect waves-light btn btn-info dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="icon ti-download"></i>
                                Download
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('manager_order_lists_excel') }}">
                                    Export to Excel
                                </a>

                                <a class="dropdown-item" href="{{ route('manager_order_lists_pdf') }}" target="_blank">
                                    Download PDF
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="row">
                    <div class="col-md-4">
                        <form action="{{ route('order_lists.index') }}" method="get">
                            <input type="text" class="form-control" placeholder="Table Name" autocomplete="off"
                                name="keyword">
                        </form>
                    </div>

                    <div class="col-md-8">
                        <form action="{{ route('order_lists.index') }}" method="get">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control" name="start_date">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control" name="end_date">
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <input type="submit" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <br>
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive rounded card-table">
                            @include('components.manager.order_lists')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('shared.javascript')
@endsection
@section('script')
@endsection
