@extends('layouts.menus.kitchen')
@section('content')
    <section class="content">
        <div class="row">

            <div class="col-xxxl-3 col-lg-3 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex align-items-start">
                            <div>
                                <img src="{{ asset('images/food/online-order-1.png') }}" class="w-80 me-20" alt="" />
                            </div>
                            <div>
                                <h2 class="my-0 fw-700">
                                    {{ $total_menu_lists ?? 0 }}
                                </h2>
                                <p class="text-fade mb-0">
                                    Total Menu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxxl-3 col-lg-3 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex align-items-start">
                            <div>
                                <img src="{{ asset('images/food/online-order-1.png') }}" class="w-80 me-20"
                                    alt="" />
                            </div>
                            <div>
                                <h2 class="my-0 fw-700">
                                    {{ $total_customers ?? 0 }}
                                </h2>
                                <p class="text-fade mb-0">
                                    Total Customers
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxxl-3 col-lg-3 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex align-items-start">
                            <div>
                                <img src="{{ asset('images/food/online-order-1.png') }}" class="w-80 me-20"
                                    alt="" />
                            </div>
                            <div>
                                <h2 class="my-0 fw-700">
                                    {{ $total_order_infos ?? 0 }}
                                </h2>
                                <p class="text-fade mb-0">Total Order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxxl-3 col-lg-3 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex align-items-start">
                            <div>
                                <img src="{{ asset('images/food/online-order-1.png') }}" class="w-80 me-20"
                                    alt="" />
                            </div>
                            <div>
                                <h2 class="my-0 fw-700">
                                    {{ number_format($total_price) }}
                                </h2>
                                <p class="text-fade mb-0">
                                    Total Revenue
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxxl-7 col-xl-6 col-lg-6 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="box-title mb-0">Daily Revenue</h4>
                                <p class="mb-0 text-mute">Lorem ipsum dolor</p>
                            </div>
                            <div class="text-end">
                                <h3 class="box-title mb-0 fw-700">$ 154K</h3>
                                <p class="mb-0"><span class="text-success">+ 1.5%</span> than last week</p>
                            </div>
                        </div>
                        <div id="chart" class="mt-20"></div>
                    </div>
                </div>
            </div>

            <div class="col-xxxl-5 col-xl-6 col-lg-6 col-12">
                <div class="box">
                    <div class="box-body">
                        <h4 class="box-title">Customer</h4>
                        <div class="d-md-flex d-block justify-content-between">
                            <div>
                                <h3 class="mb-0 fw-700">$2,780k</h3>
                                <p class="mb-0 text-primary"><small>In Restaurant</small></p>
                            </div>
                            <div>
                                <h3 class="mb-0 fw-700">$1,410k</h3>
                                <p class="mb-0 text-danger"><small>Online Order</small></p>
                            </div>
                        </div>
                        <div id="yearly-comparison"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
