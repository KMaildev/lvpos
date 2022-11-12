{{-- https://codepen.io/cyberhemant/pen/GPBOYN --}}

<style>
    .inv_table,
    td,
    th {
        border: 0.1px solid;
        padding: 10px;
        text-align: center;
    }

    .inv_table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background-color: #8c8f8e;
        color: white;
    }
</style>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" lang="en">

<body style="font-family:Arial Unicode MS, Helvetica , Sans-Serif;">
    <table style="table-layout: fixed; width: 100%;">
        <tbody>
            <tr>
                <td class="">
                    <div>
                        <img src="http://logodesignfx.com/wp-content/uploads/2018/09/dummy-logo-png-4.png"
                            alt="Company Logo" style="max-width: 100%;">
                    </div>
                </td>
                <td width="15%">

                </td>
                <td>
                    <table class="tbl-padded">
                        <caption style="text-transform: uppercase; text-align: left; font-size: 30pt;">
                            <strong>
                                Invoice
                            </strong>
                        </caption>
                        <tbody>
                            <tr>
                                <td style="padding:5px;">
                                    <strong>Invoice No.</strong>
                                </td>
                                <td style="padding:5px;">
                                    <div>
                                        INV-24
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:5px;">
                                    <strong>Date Issued</strong>
                                </td>
                                <td style="padding:5px;">
                                    July 26, 2018
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:5px;">
                                    <strong>Due Date</strong>
                                </td>
                                <td style="padding:5px;">
                                    August 10, 2018
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:5px;">
                                    <strong>Currency</strong>
                                </td>
                                <td style="padding:5px;">
                                    USD - US Dollar
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <div style="padding-top: 1cm; padding-bottom: 1cm;">
        <table style="table-layout: fixed; width: 100%;">
            <tbody>
                <tr>
                    <td>
                        <div style="padding-bottom: 10px;">
                            <strong style="text-transform: uppercase;">From</strong>
                        </div>
                        <div>
                            Wolters Kluwer India Pvt. Ltd. <br>
                            A-202, 2nd Floor<br>
                            The Qube, C.T.S. No.1498A/2<br>
                            Village Marol, Andheri (East)
                        </div>
                    </td>
                    <td width="15%">

                    </td>
                    <td>
                        <div style="padding-bottom: 10px;">
                            <strong style="text-transform: uppercase;">Bill To</strong>
                        </div>
                        <div>
                            Wolters Kluwer India Pvt. Ltd. <br>
                            A-202, 2nd Floor<br>
                            The Qube, C.T.S. No.1498A/2<br>
                            Village Marol, Andheri (East)
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


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
        </table>
    </div>

    {{-- Sub Total  --}}
    <div style="border-top: 1px solid #eee;">
        <table style="table-layout: fixed; width: 100%; border-collapse: collapse;">
            <tbody>
                <tr>
                    <td align="right" style="padding: 5px;">
                        Subtotal
                    </td>
                    <td align="right" width="20%" style="padding: 5px;">
                        1500.00
                    </td>
                </tr>
                <tr>
                    <td align="right" style="padding: 5px;">
                        + TAX
                    </td>
                    <td align="right" width="20%" style="padding: 5px;">
                        5.00
                    </td>
                </tr>
                <tr>
                    <td align="right" style="padding: 5px;">
                        - Discount
                    </td>
                    <td align="right" width="20%" style="padding: 5px;">
                        10.00
                    </td>
                </tr>
                <tr>
                    <td align="right" style="border-top: 2px solid #eee; padding: 8px;">
                        <span style="font-size: 16pt;">
                            Total Amount
                        </span>
                    </td>
                    <td align="right" width="20%" style="border-top: 2px solid #eee; padding: 8px;">
                        <strong style="font-size: 16pt;">
                            USD 1495.00
                        </strong>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
