@extends('layouts.menus.counter')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header no-border">
                        <h4 class="box-title">
                            Order list
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Table Name" id="search" autocomplete="off">
                <br>
                {{-- Order Lists  --}}
                {{-- id="orderInfos" --}}
                <div class="row py-5" id="orderInfos">
                </div>
            </div>

            <style>
                .mybill {
                    text-align: center;
                    justify-content: center;
                }

                .bill {
                    width: 100%;
                    box-shadow: 0 0 3px #aaa;
                    padding: 10px 10px;
                    box-sizing: border-box;
                }

                .flex {
                    display: flex;
                }

                .justify-between {
                    justify-content: space-between;
                }

                .table {
                    border-collapse: collapse;
                    width: 100%;
                }

                .table .header {
                    border-top: 1px dashed #000;
                    border-bottom: 1px dashed #000;
                }

                .table {
                    text-align: left;
                }

                .table .total td:first-of-type {
                    border-top: none;
                    border-bottom: none;
                }

                .table .total td {
                    border-top: 1px dashed #000;
                    border-bottom: 1px dashed #000;
                }

                .table .net-amount td:first-of-type {
                    border-top: none;
                }

                .table .net-amount td {
                    border-top: 1px dashed #000;
                }

                .table .net-amount {
                    border-bottom: 1px dashed #000;
                }
            </style>
            <div class="col-md-4">
                <div class="bill">
                    <div class="mybill">
                        <div class="brand">
                            LV Restaurant
                        </div>
                        <div class="address">
                            FLoor 2 Building No 34 Myanmar
                            <br> Phone No- 0192083910
                        </div>
                        <div>
                            INVOICE
                        </div>
                        <br>
                    </div>

                    <div class="bill-details">
                        <div class="flex justify-between">
                            <div>BILL NO: 091</div>
                            <div>TABLE NO: 091</div>
                        </div>
                        <div class="flex justify-between">
                            <div>BILL DATE: 10/Mar/2022</div>
                            <div>TIME: 14:10</div>
                        </div>
                    </div>

                    <table class="table">
                        <tr class="header">
                            <th>
                                Items
                            </th>
                            <th>
                                Rate
                            </th>
                            <th>
                                Qty
                            </th>
                            <th>
                                Amount
                            </th>
                        </tr>
                        <tr>
                            <td>Head and Shoulder</td>
                            <td>100</td>
                            <td>2</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Britania</td>
                            <td>25</td>
                            <td>2</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Tomatoes</td>
                            <td>40</td>
                            <td>1</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>Chocolates</td>
                            <td>5</td>
                            <td>12</td>
                            <td>60</td>
                        </tr>
                        <tr class="total">
                            <td></td>
                            <td>Total</td>
                            <td>17</td>
                            <td>350</td>
                        </tr>
                        <tr class="net-amount">
                            <td></td>
                            <td>Net Amnt</td>
                            <td></td>
                            <td>385</td>
                        </tr>
                    </table>

                    <p style="text-align: center">
                        Thank You! <br>
                        Please visit again
                    </p>
                </div>
            </div>


        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMenuLists', '#create-form') !!}
    <script type="text/javascript">
        // Get All Order 
        function getMenuLists() {
            var url = '{{ url('get_order_info') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    console.log(data)
                    showOrderLists(data);
                }
            });
        }
        getMenuLists();

        // Search Input
        $('#search').on('input', function() {
            search();
        });

        function search() {
            var keyword = $('#search').val();
            var url = '{{ url('get_order_info') }}';
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    keyword: keyword,
                },
                success: function(data) {
                    showOrderLists(data);
                }
            });
        }

        // Show Order Lists 
        function showOrderLists(res) {
            let order_info = '';

            for (let i = 0; i < res.order_infos.length; i++) {
                order_info += '<div class="col-xl-4 col-12 show_invoice" data-id="' + res.order_infos[i].id + '">';
                order_info += '<div class="small-box bg-primary">';

                // Order Table Info 
                order_info += '<div class="inner">';
                order_info += '<h6 style="font-size: 23px;">';
                order_info += '<span style="color: white;">';
                order_info += res.order_infos[i].table_lists_table.table_name;
                order_info += '</span>';
                order_info += '</h6>';

                order_info += '<span style="color: white;">';
                order_info += 'ID: ';
                order_info += res.order_infos[i].order_no;
                order_info += '</span>';

                order_info += '</div>';

                // Icon 
                order_info += '<div class="icon">';
                order_info += '<span class="icon-Add-user text-white">';
                order_info += '<span class="path1"></span>';
                order_info += '<span class="path2"></span>';
                order_info += '</span>';
                order_info += '</div>';

                // Name & Time 
                order_info += '<div class="small-box-footer">';
                order_info += '<span class="pull-left">';
                order_info += res.order_infos[i].users_table.name;
                order_info += '</span>';
                order_info += '<span>'
                order_info += res.order_infos[i].check_in_time;
                order_info += '</span>';
                order_info += '</div>';

                order_info += '</div>';
                order_info += '</div>';
            }

            if (res.order_infos.length <= 0) {
                order_info += '<h1 style="color: red; padding: 20px;">';
                order_info += 'No data found.';
                order_info += '</h1>';
            }

            $('#orderInfos').html(order_info);
        }

        // Order Note 
        $(document).on("click", ".show_invoice", function() {
            var id = $(this).data('id');
            alert(id)
        });
    </script>
@endsection
