@extends('layouts.menus.counter')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xxxl-3 col-lg-6 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex align-items-start">
                            <div>
                                <img src="{{ asset('images/food/online-order-1.png') }}" class="w-80 me-20" alt="" />
                            </div>
                            <div>
                                <h2 class="my-0 fw-700">89</h2>
                                <p class="text-fade mb-0">Total Order</p>
                                <p class="fs-12 mb-0 text-success">
                                    <span class="badge badge-pill badge-success-light me-5">
                                        <i class="fa fa-arrow-up"></i>
                                    </span>3% (15 Days)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxxl-3 col-lg-6 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex align-items-start">
                            <div>
                                <img src="{{ asset('images/food/online-order-2.png') }}" class="w-80 me-20"
                                    alt="" />
                            </div>
                            <div>
                                <h2 class="my-0 fw-700">899</h2>
                                <p class="text-fade mb-0">Total Delivered</p>
                                <p class="fs-12 mb-0 text-success"><span
                                        class="badge badge-pill badge-success-light me-5"><i
                                            class="fa fa-arrow-up"></i></span>8% (15 Days)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxxl-3 col-lg-6 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex align-items-start">
                            <div>
                                <img src="{{ asset('images/food/online-order-3.png') }}" class="w-80 me-20"
                                    alt="" />
                            </div>
                            <div>
                                <h2 class="my-0 fw-700">59</h2>
                                <p class="text-fade mb-0">Total Canceled</p>
                                <p class="fs-12 mb-0 text-primary"><span
                                        class="badge badge-pill badge-primary-light me-5"><i
                                            class="fa fa-arrow-down"></i></span>2% (15 Days)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxxl-3 col-lg-6 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex align-items-start">
                            <div>
                                <img src="{{ asset('images/food/online-order-4.png') }}" class="w-80 me-20"
                                    alt="" />
                            </div>
                            <div>
                                <h2 class="my-0 fw-700">$789k</h2>
                                <p class="text-fade mb-0">Total Revenue</p>
                                <p class="fs-12 mb-0 text-primary"><span
                                        class="badge badge-pill badge-primary-light me-5"><i
                                            class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
