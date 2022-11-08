<link rel="stylesheet" href="{{ asset('assets/css/bill.css') }}">

<div class="bill" id="printArea" style="background-color: white;">
    <div class="mybill">
        <div class="brand">
            LV Restaurant
        </div>
        <div class="address">
            FLoor 2 Building No 34 Myanmar
            <br> Phone No- 0192083910
        </div>
        <div>
            INVOICE
        </div>
        <br>
    </div>

    <div class="bill-details">
        <div class="flex justify-between">
            <div>BILL NO: {{ $order_info->bill_no ?? '' }}</div>
            <div>TABLE NO: {{ $order_info->order_no ?? '' }}</div>
        </div>
        <div class="flex justify-between">
            <div>BILL DATE: {{ $bill_info->bill_date ?? '' }}</div>
            <div>TIME: {{ $bill_info->bill_time ?? '' }}</div>
        </div>
        <div class="flex justify-between">
            <div>Check Out : {{ $bill_info->users_table->name ?? '' }}</div>
        </div>
    </div>

    <table class="table">
        <tr class="header">
            <th>
                Items
            </th>
            <th>
                Rate
            </th>
            <th>
                Qty
            </th>
            <th>
                Amount
            </th>
        </tr>
        @php
            $total_qty = [];
            $total_amount = [];
        @endphp
        @foreach ($order_items as $order_item)
            <tr>
                <td style="text-align: left;">
                    {{ $order_item->menu_lists_table->name ?? '' }}
                </td>

                <td style="text-align: center;">
                    @php
                        $price = $order_item->menu_lists_table->price ?? 0;
                        echo number_format($price);
                    @endphp
                </td>

                <td style="text-align: center;">
                    {{ $order_item->qty ?? 0 }}
                </td>

                <td style="text-align: center;">
                    @php
                        $qty = $order_item->qty ?? 0;
                        $mount = $qty * $price;
                        echo number_format($mount);
                        $total_qty[] = $qty;
                        $total_amount[] = $mount;
                    @endphp
                </td>
            </tr>
        @endforeach

        <tr class="total">
            <td></td>
            <td>Total</td>
            <td style="text-align: center;">
                @php
                    $total_qty = array_sum($total_qty);
                    echo number_format($total_qty);
                @endphp
            </td>

            <td style="text-align: center;">
                @php
                    $total_amount = array_sum($total_amount);
                    echo number_format($total_amount);
                @endphp
            </td>
        </tr>
    </table>

    <p style="text-align: center">
        Thank You! <br>
        Please visit again
    </p>
</div>
