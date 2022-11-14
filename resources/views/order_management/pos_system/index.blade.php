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
                    <div class="tab-pane fade active in" id="new_order">
                        @include('order_management.components.new_order')
                    </div>

                    <div class="tab-pane fade in" id="ongoingorder">
                        @include('order_management.components.ongoingorder')
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <div class="tableListShow"></div>
    @include('shared.javascript')
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMenuLists', '#create-form') !!}
@endsection
