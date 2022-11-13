@extends('layouts.menus.manager')
@section('content')
    <section class="content">

        <div class="row">
            <div class="card" style="background-color:#8dd6c5;">
                <div class="card-header">
                    <h4 class="card-title">
                        Table Change
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <form action="{{ route('counter_completed_order.index') }}" method="get">
                    <input type="text" class="form-control" placeholder="Table Name" autocomplete="off" name="keyword">
                </form>
                <br>

                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive rounded card-table">
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
                                                <span class="badge badge-success">
                                                    {{ $order_info->table_lists_table->table_name ?? '' }}
                                                </span>

                                                <button type="button" class="waves-effect waves-light btn btn-info btn-xs"
                                                    onclick="tableChangeModal({{ $order_info->id }})">
                                                    New Table
                                                </button>
                                            </td>

                                            <td>
                                                {{ $order_info->users_table->name ?? '' }}
                                            </td>

                                            <td>
                                                {{ $order_info->check_out_users_table->name ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                <div class="list-icons d-inline-flex">
                                                    <div class="list-icons-item dropdown">

                                                        <a href="#" class="list-icons-item dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            Action
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="{{ route('counter_completed_order.show', $order_info->id) }}"
                                                                class="dropdown-item">
                                                                <i class="fa fa-eye"></i>
                                                                View Invoice
                                                            </a>

                                                            <a href="{{ route('invoice_pdf_download', $order_info->id) }}"
                                                                class="dropdown-item" target="_blank">
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
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('manager.table_management.components.new_table_change_modal')
    @include('shared.javascript')
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdatesubmitChangeNewTable', '#create-new') !!}
@endsection
