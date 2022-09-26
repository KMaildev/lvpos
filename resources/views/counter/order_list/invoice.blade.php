<style>
    .mybill {
        text-align: center;
        justify-content: center;
    }

    .bill {
        width: 100%;
        box-shadow: 0 0 3px #aaa;
        padding: 10px 10px;
        box-sizing: border-box;
    }

    .flex {
        display: flex;
    }

    .justify-between {
        justify-content: space-between;
    }

    .table {
        border-collapse: collapse;
        width: 100%;
    }

    .table .header {
        border-top: 1px dashed #000;
        border-bottom: 1px dashed #000;
    }

    .table {
        text-align: left;
    }

    .table .total td:first-of-type {
        border-top: none;
        border-bottom: none;
    }

    .table .total td {
        border-top: 1px dashed #000;
        border-bottom: 1px dashed #000;
    }

    .table .net-amount td:first-of-type {
        border-top: none;
    }

    .table .net-amount td {
        border-top: 1px dashed #000;
    }

    .table .net-amount {
        border-bottom: 1px dashed #000;
    }
</style>

<div class="bill">
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
            <div>BILL NO: 091</div>
            <div>TABLE NO: {{ $order_info->order_no ?? '' }}</div>
        </div>
        <div class="flex justify-between">
            <div>BILL DATE: {{ date('d/M/Y') }}</div>
            <div>TIME: {{ date('h:i:sa') }}</div>
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
