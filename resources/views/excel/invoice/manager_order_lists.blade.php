<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th style="width: 3vh">No</th>
                <th style="width: 3vh">Order No</th>
                <th style="width: 3vh">Bill No</th>
                <th style="width: 3vh">Customer</th>
                <th style="width: 3vh">Order Date and Time</th>
                <th style="width: 3vh">End Date and Time</th>
                <th style="width: 3vh">Table</th>
                <th style="width: 3vh">Waiter</th>
                <th style="width: 3vh">Check Out</th>
                <th style="width: 3vh">Total Amount</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($order_infos as $key => $order_info)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>

                    <td>
                        {{ $order_info->order_no ?? '' }}
                    </td>

                    <td>
                        {{ $order_info->bill_no ?? '' }}
                    </td>

                    <td>
                        {{ $order_info->customer_table->customer_name ?? '' }}
                    </td>

                    <td>
                        {{ $order_info->created_at ?? '' }}
                    </td>

                    <td>
                        {{ $order_info->check_out_time ?? '' }}
                    </td>

                    <td>
                        {{ $order_info->table_lists_table->table_name ?? '' }}
                    </td>

                    <td>
                        {{ $order_info->users_table->name ?? '' }}
                    </td>

                    <td>
                        {{ $order_info->check_out_users_table->name ?? '' }}
                    </td>

                    <td>
                        @php
                            $total_amount = $order_info->total_amount;
                            echo number_format($total_amount, 2);
                        @endphp
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
