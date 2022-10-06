@extends('layouts.menus.counter')
@section('content')
    <section class="content">

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Order list
                    </h4>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="#" class="waves-effect waves-light btn btn-info" onclick="getOrderLists()">
                            <i class="fa fa-rotate"></i>
                            Update
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Table Name" id="searchOrderList" autocomplete="off">
                <br>
                {{-- Order Lists  --}}
                <div class="row py-5" id="orderInfos">
                </div>
            </div>

            <div class="col-md-4 viewInvoiceRender"></div>
        </div>
    </section>
    @include('shared.javascript')
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMenuLists', '#create-form') !!}
@endsection
