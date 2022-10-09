<div class="col-12">
    <div class="card-columns">
        @foreach ($order_infos as $order_info)
            <div class="card">
                <div class="box-header bg-info" style="padding-bottom: 10px">
                    <h4 class="box-title">
                        Table: {{ $order_info->table_lists_table->table_name ?? '' }}
                    </h4>
                    <h4 class="pull-right">
                        {{ $order_info->created_at->diffForHumans() }}
                    </h4>
                </div>

                <div class="table-responsive">
                    <table class="table simple mb-0">
                        <tbody>
                            @foreach ($order_info->order_items_table as $order_item)
                                @php
                                    if ($order_item->preparation_status == 'Preparation') {
                                        $bg_color = '#f9ce33';
                                    } elseif ($order_item->preparation_status == 'Done') {
                                        $bg_color = '#58B176';
                                    } elseif ($order_item->preparation_status == 'Reject') {
                                        $bg_color = '#e66432';
                                    } else {
                                        $bg_color = 'white';
                                    }
                                @endphp
                                <tr style="background-color: {{ $bg_color }}">
                                    <td class="text-start fz19 text-black" style="width: 1%">
                                        {{ $order_item->qty ?? 0 }}
                                    </td>

                                    <td class="fz19" style="width: 50%">
                                        {{ $order_item->menu_lists_table->name ?? '' }}
                                    </td>

                                    <td style="width: 30%">
                                        <button class="btn btn-rounded btn-warning dropdown-toggle no-caret"
                                            type="button" data-bs-toggle="dropdown">
                                            {{ $order_item->preparation_status ?? 'Order' }}
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item fz19" href="#"
                                                onclick="changeOrderItemStatus({{ $order_item->id }}, 'Preparation')">
                                                Preparation
                                            </a>
                                            <a class="dropdown-item fz19" href="#"
                                                onclick="changeOrderItemStatus({{ $order_item->id }}, 'Done')">
                                                Done
                                            </a>
                                            <a class="dropdown-item fz19" href="#"
                                                onclick="changeOrderItemStatus({{ $order_item->id }}, 'Reject')">
                                                Reject
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="box-footer" style="padding: 7px;">
                    <button class="btn btn-primary" style="background-color: #f9ce33;"
                        onclick="changeAllOrderItem({{ $order_info->id }}, 'Preparation')">
                        All Preparation
                    </button>

                    <button class="btn btn-primary" style="background-color: #e66432;"
                        onclick="changeAllOrderItem({{ $order_info->id }}, 'Reject')">
                        All Reject
                    </button>

                    <button class="btn btn-success pull-right"
                        onclick="changeAllOrderItem({{ $order_info->id }}, 'Done')">
                        <i class="fa fa-check-double"></i>
                        All Done
                    </button>
                </div>

            </div>
        @endforeach
    </div>
</div>
