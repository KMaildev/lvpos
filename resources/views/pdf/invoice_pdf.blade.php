{{-- https://codepen.io/cyberhemant/pen/GPBOYN --}}
<style>
    .inv_table,
    .inv_table td,
    .inv_table th {
        border: 0.1px solid;
        padding: 5px;
        text-align: center;
    }

    .inv_table {
        width: 100%;
        border-collapse: collapse;
    }

    .inv_table th {
        background-color: #6f7271;
        color: white;
    }
</style>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" lang="en">
<title>Invoice</title>

<body style="font-family:Arial Unicode MS, Helvetica , Sans-Serif;">

    <h3 style="text-align: center">
        Invoice
    </h3>
    {{-- Order Info  --}}
    <table style="width: 100%;">
        <tbody>
            <tr>
                {{-- Customer Info  --}}
                <td style="width: 50%;">
                    <table class="inv_table">
                        <tr>
                            <td style="width: 40%;">
                                Name
                            </td>
                            <td style="text-align: left">
                                {{ $order_info->customer_table->customer_name ?? 'No data' }}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Address
                            </td>
                            <td style="text-align: left">
                                {{ $order_info->customer_table->address ?? 'No data' }}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Email
                            </td>
                            <td style="text-align: left">
                                {{ $order_info->customer_table->email ?? 'No data' }}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Phone
                            </td>
                            <td style="text-align: left">
                                {{ $order_info->customer_table->phone ?? 'No data' }}
                            </td>
                        </tr>
                    </table>
                </td>


                <td style="width: 50%;">
                    <table class="inv_table">
                        <tr>
                            <td style="width: 40%;">
                                Order No
                            </td>
                            <td style="text-align: left">
                                #{{ $order_info->order_no ?? '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Bill No
                            </td>
                            <td style="text-align: left">
                                #{{ $order_info->bill_no ?? '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Check In Date
                            </td>
                            <td style="text-align: left">
                                {{ $order_info->check_in_time ?? '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Check Out Date
                            </td>
                            <td style="text-align: left">
                                {{ $order_info->check_out_time ?? '' }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <span>
        Cashier:
        {{ $order_info->check_out_users_table->name ?? 'Name: No data' }}
        @
        {{ $order_info->check_out_users_table->phone ?? 'Phone: No data' }}
    </span>
    {{-- Items  --}}
    <div>
        <table class="inv_table" style="table-layout: fixed; width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Items</th>
                    <th>Note</th>
                    <th>User</th>
                    <th>Preparation</th>
                    <th>Status</th>
                    <th>Preparation Date</th>
                    <th>Difference</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $all_total_cost = [];
                    $all_total_qty = [];
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
                                {{ $order_item->preparation_status ?? '' }}
                            @else
                                {{ $order_item->preparation_status ?? '' }}
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

                        <td>
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
                                $all_total_qty[] = $qty;
                            @endphp
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tr>
                <td colspan="9">
                    Total
                </td>

                <td>
                    @php
                        $all_total_qty = array_sum($all_total_qty);
                        echo number_format($all_total_qty);
                    @endphp
                </td>
                <td>
                    @php
                        $all_total_cost = array_sum($all_total_cost);
                        echo number_format($all_total_cost, 2);
                    @endphp
                </td>
            </tr>
        </table>
    </div>


</body>

</html>
