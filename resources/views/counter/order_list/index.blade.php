@extends('layouts.menus.counter')
@section('content')
    <section class="content">

        <div class="row">
            <div class="card" style="background-color:#8dd6c5;">
                <div class="card-header">
                    <h4 class="card-title">
                        Orders
                    </h4>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="#" class="waves-effect waves-light btn btn-danger" onclick="getCounterOrderLists()">
                            <i class="fa fa-rotate"></i>
                            Update
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <input type="text" class="form-control" placeholder="Table Name" id="searchCounterOrderList"
                    autocomplete="off">
                <br>
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive rounded card-table">
                            <table class="table border-no" id="example1">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Order No</th>
                                        <th>Bill No</th>
                                        <th>Order Date & Time</th>
                                        <th>Table</th>
                                        <th>Waiter</th>
                                    </tr>
                                </thead>
                                <tbody id="orderCounterInfos"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <div class="viewInvoiceRender"></div>
        </div>
    </section>
    @include('shared.javascript')
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMenuLists', '#create-form') !!}
@endsection
