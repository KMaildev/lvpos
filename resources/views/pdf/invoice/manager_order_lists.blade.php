<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download</title>
</head>

<body>
    <style>
        table,
        table td,
        table th {
            border: 0.1px solid;
            padding: 5px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            background-color: #898d8b;
            color: white;
        }
    </style>
    <h4>
        {{ now('Asia/Yangon') }}
    </h4>
    <table class="table border-no" id="example1" style="margin-bottom: 100px !important">
        <thead class="table border-no">
            <tr>
                <th>No</th>
                <th>Order No</th>
                <th>Bill No</th>
                <th>Customer</th>
                <th>Order Date & Time</th>
                <th>End Date & Time</th>
                <th>Table</th>
                <th>Waiter</th>
                <th>Check Out</th>
                <th>Total Amount</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($order_infos as $key => $order_info)
                <tr class="hover-primary finished_invoice_items">
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
                        {{ $order_info->order_date ?? '' }}
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
