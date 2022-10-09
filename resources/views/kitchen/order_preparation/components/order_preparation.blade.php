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
                                <tr>
                                    <td class="text-start fz19 text-danger">
                                        {{ $order_item->qty ?? 0 }}
                                    </td>

                                    <td class="fz19">
                                        {{ $order_item->menu_lists_table->name ?? '' }}
                                    </td>

                                    <td>
                                        <button class="btn btn-rounded btn-warning dropdown-toggle no-caret"
                                            type="button" data-bs-toggle="dropdown">
                                            Preparation
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item fz19" href="#">
                                                Ready
                                            </a>
                                            <a class="dropdown-item fz19" href="#">
                                                Preparation
                                            </a>
                                            <a class="dropdown-item fz19" href="#">
                                                Reject
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
</div>
