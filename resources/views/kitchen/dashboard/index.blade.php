@extends('layouts.menus.kitchen')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="py-3">

                <button type="button" class="btn btn-primary-light btn-sm" data-bs-toggle="modal"
                    data-bs-target="#modal-default">
                    Order
                </button>

                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal-info">
                    Done
                </button>

            </div>
        </div>
    </div>
@endsection
