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
            <th>Action</th>
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

                <td class="text-center">
                    <div class="list-icons d-inline-flex">
                        <div class="list-icons-item dropdown">

                            <a href="#" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Action
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('order_lists.show', $order_info->id) }}" class="dropdown-item">
                                    <i class="fa fa-eye"></i>
                                    View Invoice
                                </a>

                                <a href="{{ route('invoice_pdf_download', $order_info->id) }}" class="dropdown-item"
                                    target="_blank">
                                    <i class="fa fa-download"></i>
                                    Download Invoice
                                </a>

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
