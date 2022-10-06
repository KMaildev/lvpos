@extends('layouts.pos.pos_system')
@section('content')
    @include('order_management.shared.model')
    @include('order_management.shared.show_table_modal')

    <div class="row pos">
        <div class="panel">
            <div class="panel-body">
                <!-- Top  -->
                @include('order_management.shared.top_links')
                <!-- Tab panes -->
                <div class="tab-content tab-content-xs">
                    <div class="tab-pane fade active in" id="home">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="panel">
                                    <div class="row">
                                        <!-- Item & Info  -->
                                        <div class="col-md-8">

                                            {{-- Top Search Bar --}}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="navbar-search">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search"
                                                                id="search" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                {{-- Menu Category --}}
                                                <div class="col-md-3">
                                                    @include('order_management.shared.menu_category')
                                                </div>


                                                {{-- Menu Lists --}}
                                                <div class="col-md-9">
                                                    <div style="height: 100%">
                                                        <div class="product-grid">
                                                            <div class="row row-m-3 myscroll" id="MenuList">
                                                                <!-- Item List Here  -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Customer & Order Info  -->
                                        <div class="col-md-4">
                                            <form action="#" class="form-vertical orderConfirm" method="post">
                                                <div class="row">

                                                    {{-- Add Customer --}}
                                                    <div class="col-md-6 form-group">
                                                        <label for="customer_name">
                                                            Customer name
                                                        </label>
                                                        <div class="d-flex">
                                                            <select class="form-control select2" id="customerLists"
                                                                name="customer_id">
                                                            </select>

                                                            <button type="button" class="btn btn-primary ml-l"
                                                                aria-hidden="true" data-toggle="modal"
                                                                data-target="#client-info">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 form-group">
                                                        <label for="store_id">
                                                            Table
                                                            <span class="color-red">*</span>
                                                        </label>
                                                        <div class="d-flex">

                                                            <input type="text" id="tableNameForShow" readonly>
                                                            <input type="hidden" id="tableListId">

                                                            <button type="button" class="btn btn-primary ml-l"
                                                                aria-hidden="true" data-toggle="modal"
                                                                data-target="#showTableLists">
                                                                <i class="fa fa-table"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Order Items --}}
                                                <div class="productlist">
                                                    <div class="slimScrollDiv"
                                                        style="position: relative; overflow: hidden; width: auto; height: 500px;">
                                                        <div class="product-list pdlist"
                                                            style="overflow: hidden; width: auto; height: 500px;">
                                                            <div class="table-responsive table_myscroll" id="addfoodlist">
                                                                <table class="table table-bordered" border="1"
                                                                    width="100%" id="addinvoice">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Item </th>
                                                                            <th>Price </th>
                                                                            <th>Qty </th>
                                                                            <th>Total </th>
                                                                            <th>Action </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="orderItemList">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Button Procress --}}
                                                <div class="fixedclasspos">
                                                    <div class="row d-flex flex-wrap align-items-center">
                                                        <div class="col-sm-6 leftview"></div>

                                                        <div class="col-sm-6 text-right">
                                                            {{-- calculator --}}
                                                            <a class="btn btn-primary cusbtn" data-toggle="modal"
                                                                data-target="#exampleModal">
                                                                <i class="fa fa-calculator" aria-hidden="true"></i>
                                                            </a>

                                                            <input type="button" class="btn btn-primary btn-large cusbtn"
                                                                value="0" id="totalAmountShow">

                                                            <input type="submit" class="btn btn-success btn-large cusbtn"
                                                                value="Order Confirm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.javascript')
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMenuLists', '#create-form') !!}
@endsection
