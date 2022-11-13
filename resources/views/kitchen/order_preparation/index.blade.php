@extends('layouts.menus.kitchen')
@section('content')
    <div class="row py-3">

        <div class="col-md-12">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Search" id="searchInput">

                    <button type="button" class="btn btn-info btn-sm" onclick="getOrderInfoPreparation()">
                        <i class="fa fa-rotate"></i>
                        Update
                    </button>

                    <button class="waves-effect waves-light btn btn-success dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="icon ti-download"></i>
                        Download
                    </button>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('get_kitchen_order_preparation_excel') }}">
                            Export to Excel
                        </a>

                        <a class="dropdown-item" href="{{ route('get_kitchen_order_preparation_pdf') }}" target="_blank">
                            Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-2 viewOrderInfoPreparation"></div>
    </div>
    @include('shared.javascript')
@endsection
