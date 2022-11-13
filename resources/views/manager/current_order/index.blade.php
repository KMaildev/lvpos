@extends('layouts.menus.manager')
@section('content')
    <section class="content">

        <div class="row">
            <div class="card" style="background-color:#8dd6c5;">
                <div class="card-header">
                    <h4 class="card-title">
                        Current Order
                    </h4>


                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="#" class="waves-effect waves-light btn btn-danger" onclick="getManagerCurrentOrder()">
                            <i class="fa fa-rotate"></i>
                            Update
                        </a>


                        <div class="btn-group">
                            <button class="waves-effect waves-light btn btn-info dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="icon ti-download"></i>
                                Download
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('manager_current_order_excel') }}">
                                    Export to Excel
                                </a>
                                
                                <a class="dropdown-item" href="{{ route('manager_current_order_pdf') }}" target="_blank">
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
                <input type="text" class="form-control" placeholder="Search: Menu" id="searchManagerCurrentOrder"
                    autocomplete="off">
                <br>
                <div class="py-2 viewManagerCurrentOrder"></div>
            </div>
        </div>
    </section>

    @include('shared.javascript')
@endsection
@section('script')
@endsection
