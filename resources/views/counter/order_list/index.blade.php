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

            <div class="col-md-4 viewInvoiceRender"></div>
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
            var url = '{{ url('show_order_info') }}';
            $.ajax({
                url: url + '/' + id,
                method: "GET",
                success: function(data) {
                    $('.viewInvoiceRender').html(data.html);
                }
            });
        });
    </script>
@endsection
