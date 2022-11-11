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
                                {{ number_format($total_price ?? 0) }}
                            </h2>
                            <p class="text-fade mb-0">
                                Total Revenue
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-xxxl-12 col-xl-12 col-lg-12 col-12">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="box-title mb-0">Income</h4>
                            <p class="mb-0 text-mute">
                                Chart
                            </p>
                        </div>
                        <div class="text-end">
                            <h3 class="box-title mb-0 fw-700">
                                {{ number_format($total_price ?? 0) }}
                            </h3>
                        </div>
                    </div>
                    <canvas id="incomeChart" height="100px"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xxxl-12 col-xl-12 col-lg-12 col-12">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="box-title mb-0">Customer</h4>
                            <p class="mb-0 text-mute">
                                Chart
                            </p>
                        </div>
                        <div class="text-end">
                            <h3 class="box-title mb-0 fw-700">
                                {{ $total_customers ?? 0 }}
                            </h3>
                        </div>
                    </div>
                    <canvas id="customerChart" height="100px"></canvas>
                </div>
            </div>
        </div>

    </div>
</section>
