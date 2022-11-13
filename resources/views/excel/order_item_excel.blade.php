<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Item</title>
</head>

<body>
    <h4>
        Current Order ({{ now('Asia/Yangon') }})
    </h4>
    <table class="table">
        <thead class="bg-info">
            <tr>
                <th style="width: 3vh">No</th>
                <th style="width: 3vh">Table</th>
                <th style="width: 3vh">Menu</th>
                <th style="width: 3vh">Qty</th>
                <th style="width: 3vh">Price</th>
                <th style="width: 3vh">Total</th>
                <th style="width: 3vh">Order Note</th>
                <th style="width: 3vh">Order Time</th>
                <th style="width: 3vh">End Time</th>
                <th style="width: 3vh">Difference</th>
                <th style="width: 3vh">Preparation</th>
                <th style="width: 3vh">Manager Remark</th>
                <th style="width: 3vh">Status</th>
            </tr>
        </thead>

        <tbody class="order_preparation">
            @foreach ($order_items as $key => $order_item)
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
                        {{ $order_item->qty ?? 0 }}
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
                        {{ $order_item->manager_remark ?? '' }}
                    </td>

                    <td>
                        {{ $order_item->preparation_status ?? 'Order' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
