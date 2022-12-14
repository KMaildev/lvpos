@extends('layouts.menus.kitchen')
@section('content')
    <div class="row py-3">

        <div class="col-md-12">
            <form action="{{ route('all_order_done.index') }}" method="get" autocomplete="off">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Search" name="keyword">

                        <button class="waves-effect waves-light btn btn-success dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon ti-download"></i>
                            Download
                        </button>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="{{ route('get_kitchen_order_all_done_excel') }}">
                                Export to Excel
                            </a>

                            <a class="dropdown-item" href="{{ route('get_kitchen_order_all_done_pdf') }}" target="_blank">
                                Download PDF
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="py-2">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="box">
                    <div class="box-body">
                        <h4 class="box-title">
                            Completed (All)
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                @include('components.order_item_header')
                                <tbody class="order_preparation">
                                    @foreach ($order_items as $key => $order_item)
                                        @php
                                            if ($order_item->preparation_status == 'Preparation') {
                                                $bg_color = '#f9ce33';
                                            } elseif ($order_item->preparation_status == 'Done') {
                                                $bg_color = '#58B176';
                                            } elseif ($order_item->preparation_status == 'Reject') {
                                                $bg_color = '#e66432';
                                            } else {
                                                $bg_color = 'gray';
                                            }
                                        @endphp

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
                                                <span class="badge badge-pill badge-info">
                                                    {{ $order_item->qty ?? 0 }}
                                                </span>
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
                                                <button class="btn btn-sm btn-rounded dropdown-toggle no-caret text-white"
                                                    type="button" data-bs-toggle="dropdown"
                                                    style="background-color: {{ $bg_color }}">
                                                    {{ $order_item->preparation_status ?? 'Order' }}
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
