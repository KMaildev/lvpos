@extends('layouts.pos.pos_system')
@section('content')
    @include('order_management.shared.model')
    @include('order_management.shared.pos_body')

    <audio id="myAudio" src="https://restaurant.bdtask.com/demo-classic/assets/2022-08-11/s.mp3" preload="auto"
        class="display-none">
    </audio>
    <div id="payprint2"> </div>

    <div class="modal fade modal-warning" id="posprint" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" id="kotenpr"> </div>
            </div>
        </div>
    </div>

    <div id="orderdetailsp" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <strong>
                    </strong>
                </div>
                <div class="modal-body orddetailspop"> </div>
            </div>
            <div class="modal-footer"> </div>
        </div>
    </div>
@endsection
