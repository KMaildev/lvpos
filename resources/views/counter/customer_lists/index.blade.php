@extends('layouts.menus.counter')
@section('content')
    <section class="content">

        <div class="row">
            <div class="card" style="background-color:#8dd6c5;">
                <div class="card-header">
                    <h4 class="card-title">
                        Customers
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <form action="{{ route('counter_customer_lists.index') }}" method="get">
                    <input type="text" class="form-control" placeholder="Search" autocomplete="off" name="search">
                </form>
                <br>
                <div class="box">
                    <div class="box-body">
                        @include('components.customer.customer_list')
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('shared.javascript')
@endsection
@section('script')
@endsection
