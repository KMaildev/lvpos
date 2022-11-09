@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 col-lg-8">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="{{ route('pos_system.index') }}" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class='fa fa-kitchen-set fs-1'
                                                style="color: #EA5659;text-shadow:2px 2px 2px gray;"></i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px; ">
                                        <b>Point of Sale</b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="{{ route('manager_dashboard.index') }}" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class='fa fa-users fs-1'
                                                style="color: #F4AC3F;text-shadow:2px 2px 2px gray;">
                                            </i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px;">
                                        <b>
                                            Manager
                                        </b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="{{ route('order_preparation.index') }}" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class='fa fa-bowl-rice fs-1'
                                                style="color: #60D0DD;text-shadow:2px 2px 2px gray;"></i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px;">
                                        <b>Kitchen</b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="{{ route('counter_dashboard.index') }}" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class='fa fa-table fs-1'
                                                style="color: #F4AC3F; text-shadow:2px 2px 2px gray;">
                                            </i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px;">
                                        <b>
                                            Counter
                                            (Cashier)
                                        </b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="{{ route('management_dashboard.index') }}" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class='fa fa-people-roof fs-1'
                                                style="color: #5A8DEE;text-shadow:2px 2px 2px gray;"></i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px;">
                                        <b>Management</b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="#" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class="fa-solid fa-warehouse fs-1"
                                                style="color: #5A8DEE;text-shadow:2px 2px 2px gray;"></i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px;">
                                        <b>Inventory</b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="{{ route('employee.index') }}" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class='fa fa-user-check fs-1'
                                                style="color: #8D50F6;text-shadow:2px 2px 2px gray;"></i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px;">
                                        <b>HR</b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class='fa fa-gear fs-1'
                                                style="color: #55AE7D;text-shadow:2px 2px 2px gray;"></i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px;">
                                        <b>Setting</b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class='fa fa-history fs-1'
                                                style="color: #EA5659;text-shadow:2px 2px 2px gray;"></i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px;">
                                        <b> Activities</b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a href="" style="text-decoration: none">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger">
                                            <i class='fa fa-users fs-1'
                                                style="color: #06e065;text-shadow:2px 2px 2px gray;"></i>
                                        </span>
                                    </div>
                                    <span class="d-block mb-1 text-nowrap" style="font-size: 19px;">
                                        <b>Profile</b>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
