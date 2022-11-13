<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="box">
        <div class="box-body">
            <h4 class="box-title">
                Current Order (Today)
            </h4>
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th style="width: 1%">No</th>
                            <th style="width: 5%">Table</th>
                            <th style="width: 20%">Menu</th>
                            <th style="width: 2%">Qty</th>
                            <th style="width: 2%">Price</th>
                            <th style="width: 2%">Total</th>
                            <th style="width: 20%">Order Note</th>
                            <th style="width: 13%">Order Time</th>
                            <th style="width: 13%">End Time</th>
                            <th style="width: 10%">Difference</th>
                            <th style="width: 10%">Preparation</th>
                            <th style="width: 20%">Manager Remark</th>
                            <th style="width: 5%">Status</th>
                        </tr>
                    </thead>

                    <tbody class="order_preparation">
                        @foreach ($order_items as $key => $order_item)
                            @php
                                if ($order_item->preparation_status == 'Preparation') {
                                    $bg_color = '#f9ce33';
                                } elseif ($order_item->preparation_status == 'Done') {
                                    $bg_color = '#58B176';
                                } elseif ($order_item->preparation_status == 'Reject') {
                                    $bg_color = '#e66432';
                                } else {
                                    $bg_color = 'gray';
                                }
                            @endphp

                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>

                                <td>
                                    {{ $order_item->order_info_table->table_lists_table->table_name ?? '' }}
                                </td>

                                <td>
                                    {{ $order_item->menu_lists_table->name ?? '' }}
                                </td>

                                <td>
                                    <span class="badge badge-pill badge-info">
                                        <span style="color: white">
                                            {{ $order_item->qty ?? 0 }}
                                        </span>
                                    </span>
                                </td>

                                <td>
                                    @php
                                        $price = $order_item->price;
                                        echo number_format($price);
                                    @endphp
                                </td>

                                <td>
                                    @php
                                        $price = $order_item->price;
                                        $qty = $order_item->qty;
                                        $total = $price * $qty;
                                        echo number_format($total, 2);
                                    @endphp
                                </td>

                                <td style="font-size: 13px;">
                                    {{ $order_item->remark ?? '' }}
                                </td>

                                <td>
                                    {{ $order_item->order_info_table->order_date ?? '' }}
                                </td>

                                <td>
                                    {{ $order_item->preparation_date }}
                                </td>

                                <td>
                                    @if ($order_item->difference_time <= 1)
                                        {{ $order_item->difference_time ?? 0 }} minute
                                    @elseif($order_item->difference_time > 1)
                                        {{ $order_item->difference_time ?? 0 }} minutes
                                    @endif
                                </td>

                                <td>
                                    {{ $order_item->user_table->name ?? '' }}
                                </td>

                                <td>
                                    <input list="suggestion" type="text"
                                        value="{{ $order_item->manager_remark ?? '' }}" style="width: 100px;"
                                        data-id="{{ $order_item->id }}" class="updateManagerRemark">
                                    <datalist id="suggestion">
                                        <option value="မြန်မြန်လုပ်ပါ">
                                    </datalist>
                                </td>

                                <td>
                                    <button class="btn btn-sm btn-rounded dropdown-toggle no-caret text-white"
                                        type="button" data-bs-toggle="dropdown"
                                        style="background-color: {{ $bg_color }}">
                                        {{ $order_item->preparation_status ?? 'Order' }}
                                    </button>
                                    <div class="dropdown-menu">

                                        @can('preparation_button')
                                            <a class="dropdown-item fz19" href="#"
                                                onclick="changeOrderItemStatus({{ $order_item->id }}, 'Preparation')">
                                                Preparation
                                            </a>
                                        @endcan

                                        @can('done_button')
                                            <a class="dropdown-item fz19" href="#"
                                                onclick="changeOrderItemStatus({{ $order_item->id }}, 'Done')">
                                                Done
                                            </a>
                                        @endcan

                                        @can('reject_button')
                                            <a class="dropdown-item fz19" href="#"
                                                onclick="changeOrderItemStatus({{ $order_item->id }}, 'Reject')">
                                                Reject
                                            </a>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
