<link rel="stylesheet" href="{{ asset('assets/css/bill.css') }}">
<div id="printArea" style="background-color: white">
    <center>
        <div class="receipt">
            <div class="mybill">
                <div class="brand" style="font-size: 12px;">
                    LV Restaurant
                </div>
                <div class="address" style="font-size: 12px;">
                    FLoor 2 Building No 34 Myanmar
                    <br> Phone No- 0192083910
                </div>
            </div>
            <br>
            <div class="flex justify-between">
                <div style="font-size: 12px;">
                    BILL NO: {{ $order_info->bill_no ?? '' }}
                </div>
                <div style="font-size: 12px;">
                    TABLE NO: {{ $order_info->order_no ?? '' }}
                </div>
            </div>
            <div class="flex justify-between">
                <div style="font-size: 12px;">
                    BILL DATE: {{ date('d/M/Y') }} {{ date('h:i:sa') }}
                </div>
            </div>

            <br>
            <table class="table">
                <tr class="header">
                    <th style="font-size: 12px;">
                        Items
                    </th>
                    <th style="font-size: 12px;">
                        Price
                    </th>
                    <th style="font-size: 12px;">
                        Qty
                    </th>
                    <th style="font-size: 12px;">
                        Total
                    </th>
                </tr>
                @php
                    $total_qty = [];
                    $total_amount = [];
                @endphp
                @foreach ($order_items as $order_item)
                    <tr style="padding: 10px;">
                        <td style="text-align: left; font-size: 12px;">
                            {{ $order_item->menu_lists_table->name ?? '' }}
                        </td>

                        <td style="text-align: center; font-size: 12px;">
                            @php
                                $price = $order_item->menu_lists_table->price ?? 0;
                                echo number_format($price);
                            @endphp
                        </td>

                        <td style="text-align: center; font-size: 12px;">
                            {{ $order_item->qty ?? 0 }}
                        </td>

                        <td style="text-align: center; font-size: 12px;">
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
                    <td style="font-size: 12px;">
                        Total
                    </td>
                    <td style="text-align: center font-size: 12px;">
                        @php
                            $total_qty = array_sum($total_qty);
                            echo number_format($total_qty);
                        @endphp
                    </td>

                    <td style="text-align: center; font-size: 12px;">
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
    </center>
</div>
<br>
<div style="text-align: center">
    <button type="button" class="btn btn-success" onclick="submitPayment({{ $order_info->id }}, {{ $total_amount }})">
        <i class="fa fa-credit-card"></i>
        Submit Payment
    </button>

    <button class="btn btn-warning" type="button" onclick="printInvoice()">
        <span>
            <i class="fa fa-print"></i>
            Print
        </span>
    </button>
</div>
<br><br>
<br><br>
