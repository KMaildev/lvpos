@extends('layouts.menus.kitchen')
@section('content')
    <div class="row py-3">

        <div class="col-md-12">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Search" id="searchOrderInfoDone">

                    <button type="button" class="btn btn-info btn-sm" onclick="getOrderInfoDone()">
                        <i class="fa fa-rotate"></i>
                        Update
                    </button>
                </div>
            </div>
        </div>

        <div class="py-2 viewOrderInfoDone"></div>
    </div>
    @include('shared.javascript')
@endsection
