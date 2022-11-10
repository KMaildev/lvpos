<section class="content">
    <div class="row">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $order_info->order_no ?? '' }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row invoice printableArea">

        <div class="row">
            <div class="col-12">
                <div class="bb-1 clearFix">
                    <div class="text-end pb-15">
                        <button class="btn btn-success" type="button">
                            <span>
                                <i class="fa fa-print"></i>
                                PDF
                            </span>
                        </button>

                        <button id="print2" class="btn btn-warning" type="button">
                            <span>
                                <i class="fa fa-print"></i>
                                Print
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="page-header">
                    <h2 class="d-inline">
                        <span class="fs-30">Invoice</span>
                    </h2>

                    <div class="pull-right text-end">
                        <h3>
                            {{ $order_info->check_out_time ?? '' }}
                        </h3>
                    </div>

                </div>
            </div>
            <!-- /.col -->
        </div>

        <div class="row invoice-info">

            <div class="col-md-6 invoice-col">
                <strong>
                    Customer
                </strong>
                <address>
                    <strong class="text-blue fs-24">
                        {{ $order_info->customer_table->customer_name ?? 'Name: No data' }}
                    </strong><br>

                    <strong class="d-inline">
                        {{ $order_info->customer_table->address ?? 'Address: No data' }}
                    </strong><br>

                    <strong>
                        {{ $order_info->customer_table->phone ?? 'Phone: No data' }}
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        Email: {{ $order_info->customer_table->email ?? 'No data' }}
                    </strong>
                </address>
            </div>

            <!-- /.col -->
            <div class="col-md-6 invoice-col text-end">
                <strong>
                    Cashier
                </strong>
                <address>
                    <strong class="text-blue fs-24">
                        {{ $order_info->check_out_users_table->name ?? 'Name: No data' }}
                    </strong><br>

                    {{ $order_info->check_out_users_table->address ?? 'Address: No data' }}
                    <br>

                    <strong>
                        Phone:
                        {{ $order_info->check_out_users_table->phone ?? 'No data' }}
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        Email: {{ $order_info->check_out_users_table->email ?? 'No data' }}
                    </strong>
                </address>
            </div>

            <!-- /.col -->
            <div class="col-sm-12 invoice-col mb-15">
                <div class="invoice-details row no-margin">
                    <div class="col-md-2 col-lg-2 col-sm-3"><b>Order No </b>#{{ $order_info->order_no ?? '' }}</div>
                    <div class="col-md-2 col-lg-2 col-sm-3"><b>Bill No:</b> {{ $order_info->bill_no ?? '' }}</div>
                    <div class="col-md-4 col-lg-4 col-sm-3"><b>Check In Date:</b>
                        {{ $order_info->check_in_time ?? '' }}
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-3">
                        <b>Check Out Date:</b>
                        {{ $order_info->check_out_time ?? '' }}
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Items</th>
                            <th>Note</th>
                            <th>User</th>
                            <th>Preparation</th>
                            <th>Status</th>
                            <th>Preparation Date</th>
                            <th>Difference</th>
                            <th class="text-end">Price</th>
                            <th class="text-end">Qty</th>
                            <th class="text-end">Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $all_total_cost = [];
                        @endphp
                        @foreach ($order_items as $key => $order_item)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>

                                <td>
                                    {{ $order_item->menu_lists_table->name ?? '' }}
                                </td>

                                <td>
                                    {{ $order_item->remark ?? '' }}
                                </td>

                                {{-- User --}}
                                <td>
                                    {{ $order_item->user_table->name ?? '' }}
                                </td>

                                {{-- Preparation --}}
                                <td>
                                    {{ $order_item->preparation_user->name ?? '' }}
                                </td>

                                {{-- Preparation Status --}}
                                <td>
                                    @if ($order_item->preparation_status == 'Reject')
                                        <span class="badge badge-pill badge-danger">
                                            {{ $order_item->preparation_status ?? '' }}
                                        </span>
                                    @else
                                        <span class="badge badge-pill badge-success">
                                            {{ $order_item->preparation_status ?? '' }}
                                        </span>
                                    @endif
                                </td>

                                {{-- PreparationDate --}}
                                <td>
                                    {{ $order_item->preparation_date ?? '' }}
                                </td>

                                {{-- Difference Time --}}
                                <td>
                                    @if ($order_item->difference_time <= 1)
                                        {{ $order_item->difference_time ?? 0 }} minute
                                    @elseif($order_item->difference_time > 1)
                                        {{ $order_item->difference_time ?? 0 }} minutes
                                    @endif
                                </td>

                                {{-- Price --}}
                                <td>
                                    @php
                                        echo number_format($order_item->price, 2);
                                    @endphp
                                </td>

                                {{-- Qty  --}}
                                <td>
                                    {{ $order_item->qty ?? 0 }}
                                </td>

                                <td class="text-end">
                                    @php
                                        $price = $order_item->price ?? 0;
                                        $qty = $order_item->qty ?? 0;
                                        $total_cost = $price * $qty;
                                        echo number_format($total_cost, 2);
                                        
                                        if ($order_item->preparation_status == 'Reject') {
                                            $price = 0;
                                            $qty = 0;
                                        } else {
                                            $price = $order_item->price ?? 0;
                                            $qty = $order_item->qty ?? 0;
                                        }
                                        $total_cost = $price * $qty;
                                        $all_total_cost[] = $total_cost;
                                    @endphp
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-12 text-end">
                <p class="lead">
                    <b>Payment Date</b>
                    <span class="text-danger">
                        {{ $order_info->check_out_time ?? '' }}
                    </span>
                </p>

                <div class="total-payment">
                    <h3>
                        <b>Total :</b>
                        @php
                            $all_total_cost = array_sum($all_total_cost);
                            echo number_format($all_total_cost, 2);
                        @endphp
                    </h3>
                </div>

            </div>
            <!-- /.col -->
        </div>
    </div>

</section>
