@extends('layouts.menus.manager')
@section('content')
    <section class="content">

        <div class="row">
            <div class="card" style="background-color:#8dd6c5;">
                <div class="card-header">
                    <h4 class="card-title">
                        Completed
                    </h4>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-12 col-lg-12 col-sm-12">
                <form action="{{ route('counter_completed_order.index') }}" method="get">
                    <input type="text" class="form-control" placeholder="Table Name" autocomplete="off" name="keyword">
                </form>
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
