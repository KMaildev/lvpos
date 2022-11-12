@extends('layouts.menus.counter')
@section('content')
    <section class="content">

        <div class="col-md-12 col-lg-12">
            <div class="box p-30 pt-50">
                @include('components.customer.show')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="box">
                    <div class="box-body">
                        <h4 class="box-title">
                            Order History
                        </h4>
                        <div class="table-responsive rounded card-table">
                            @include('components.completed_order.order_lists')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
