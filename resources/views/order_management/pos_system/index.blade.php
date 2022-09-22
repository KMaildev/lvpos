@extends('layouts.pos.pos_system')
@section('content')
    @include('order_management.shared.model')

    <div class="row pos">
        <div class="panel">
            <div class="panel-body">
                <!-- Top  -->
                @include('order_management.shared.top_links')
                <!-- Tab panes -->
                <div class="tab-content tab-content-xs">
                    <div class="tab-pane fade active in" id="home">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="panel">
                                    <div class="row">
                                        <!-- Item & Info  -->
                                        <div class="col-md-8">

                                            {{-- Top Search Bar --}}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="navbar-search">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search"
                                                                id="search" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                {{-- Menu Category --}}
                                                <div class="col-md-3">
                                                    @include('order_management.shared.menu_category')
                                                </div>


                                                {{-- Menu Lists --}}
                                                <div class="col-md-9">
                                                    <div style="height: 100%">
                                                        <div class="product-grid">
                                                            <div class="row row-m-3 myscroll" id="MenuList">
                                                                <!-- Item List Here  -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Customer & Order Info  -->
                                        <div class="col-md-4">
                                            <form action="#" class="form-vertical orderConfirm" method="post">
                                                <div class="row">

                                                    {{-- Add Customer --}}
                                                    <div class="col-md-6 form-group">
                                                        <label for="customer_name">
                                                            Customer name
                                                        </label>
                                                        <div class="d-flex">
                                                            <select class="form-control select2" id="customerLists"
                                                                name="customer_id">
                                                            </select>

                                                            <button type="button" class="btn btn-primary ml-l"
                                                                aria-hidden="true" data-toggle="modal"
                                                                data-target="#client-info">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 form-group">
                                                        <label for="store_id">
                                                            Table
                                                            <span class="color-red">*</span>
                                                        </label>
                                                        <select class="form-control select2 text-danger"
                                                            name="table_list_id" id="tableListId">
                                                            <option value="">--Select Table--</option>
                                                            @foreach ($table_lists as $table_list)
                                                                <option value="{{ $table_list->id }}">
                                                                    {{ $table_list->table_name ?? '' }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Order Items --}}
                                                <div class="productlist">
                                                    <div class="slimScrollDiv"
                                                        style="position: relative; overflow: hidden; width: auto; height: 500px;">
                                                        <div class="product-list pdlist"
                                                            style="overflow: hidden; width: auto; height: 500px;">
                                                            <div class="table-responsive table_myscroll" id="addfoodlist">
                                                                <table class="table table-bordered" border="1"
                                                                    width="100%" id="addinvoice">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Item </th>
                                                                            <th>Price </th>
                                                                            <th>Qty </th>
                                                                            <th>Total </th>
                                                                            <th>Action </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="orderItemList">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Button Procress --}}
                                                <div class="fixedclasspos">
                                                    <div class="row d-flex flex-wrap align-items-center">
                                                        <div class="col-sm-6 leftview"></div>

                                                        <div class="col-sm-6 text-right">
                                                            {{-- calculator --}}
                                                            <a class="btn btn-primary cusbtn" data-toggle="modal"
                                                                data-target="#exampleModal">
                                                                <i class="fa fa-calculator" aria-hidden="true"></i>
                                                            </a>

                                                            <input type="button" class="btn btn-primary btn-large cusbtn"
                                                                value="0" id="totalAmountShow">

                                                            <input type="submit" class="btn btn-success btn-large cusbtn"
                                                                value="Order Confirm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMenuLists', '#create-form') !!}
    <script type="text/javascript">
        // Get All Menus 
        function getMenuLists() {
            var url = '{{ url('get_menu_lists') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    showMeulLists(data);
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
            var url = '{{ url('get_menu_lists') }}';
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    keyword: keyword,
                },
                success: function(data) {
                    showMeulLists(data);
                }
            });
        }

        // Search By Category 
        function searchByCategory(categoryId) {
            var url = '{{ url('search_menu_lists_by_category') }}';
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    category_id: categoryId,
                },
                success: function(data) {
                    showMeulLists(data);
                }
            });
        }

        // Show Menu Lists 
        function showMeulLists(res) {
            let menu_list = '';

            for (let i = 0; i < res.menu_lists.length; i++) {

                var storagePath = "{!! Storage::url('') !!}" + res.menu_lists[i].photo;
                var imageStoragePath = storagePath.split('public/');
                var ImageUrl = imageStoragePath[0] + imageStoragePath[1];

                var dataId = res.menu_lists[i].id;
                var price = res.menu_lists[i].price;

                menu_list += '<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-p-3 add_to_order" data-id="' +
                    dataId + '" data-price="' +
                    price + '">';
                menu_list += '<div class="panel panel-bd product-panel select_product">';

                // Image
                menu_list += '<div class="panel-body">';
                menu_list += '<img src="' + ImageUrl + '" class="img-responsive">';
                menu_list += '</div>';

                // Title 
                menu_list += '<div class="panel-footer">';
                menu_list += '<span style="text-align: center;">';
                menu_list += res.menu_lists[i].name;
                menu_list += '</span>';
                menu_list += '</div>';

                menu_list += '</div>';
                menu_list += '</div>';
            }

            if (res.menu_lists.length <= 0) {
                menu_list += '<h1 style="color: red; padding: 20px;">';
                menu_list += 'No data found.';
                menu_list += '</h1>';
            }

            $('#MenuList').html(menu_list);
        }

        // Add to Order 
        $(document).on("click", ".add_to_order", function() {
            var menu_list_id = $(this).data('id');
            var price = $(this).data('price');

            if (menu_list_id == null || menu_list_id == "") {
                alert("Please Select item");
                return false;
            }

            var url = '{{ url('store_temporary_order_item') }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    menu_list_id: menu_list_id,
                    price: price,
                },
                success: function(data) {
                    audioPlay();
                    getTemporaryOrderItem();
                },
                error: function(data) {}
            });
        });

        function getTemporaryOrderItem() {
            var url = '{{ url('get_temporary_order_item') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    showOrderItems(data);
                }
            });
        }
        getTemporaryOrderItem();

        // Show Order Items 
        function showOrderItems(res) {
            let order_item_list = '';
            var totalAmount = 0;
            for (let i = 0; i < res.temporary_order_items.length; i++) {
                let item_id = res.temporary_order_items[i].id;
                let itemName = res.temporary_order_items[i].menu_lists_table.name;
                let price = res.temporary_order_items[i].price;
                let qty = res.temporary_order_items[i].qty;
                let totalItemPrice = qty * price;
                totalAmount += totalItemPrice;
                let dataId = res.temporary_order_items[i].menu_list_id;


                order_item_list += '<tr>';

                // Item Name & Add Note 
                order_item_list += '<th>';
                order_item_list += itemName;
                order_item_list += '</br>';
                order_item_list += '<a class="serach pl-15 add_order_note" data-id="' + item_id + '">';
                order_item_list += '<i class="fa fa-sticky-note"></i>';
                order_item_list += '</a>';
                order_item_list += '</th>';


                // Price 
                order_item_list += '<th>';
                order_item_list += price;
                order_item_list += '</th>';

                // Qty 
                order_item_list += '<th scope="row">';
                order_item_list += '<a class="btn btn-info btn-sm btnleftalign add_to_order" data-id="' + dataId +
                    '" data-price="' + price + '">';
                order_item_list += '<i class="fa fa-plus"></i>';
                order_item_list += '</a> ';
                order_item_list += qty;

                order_item_list += ' <a class="btn btn-danger btn-sm btnleftalign order_qty_minus" data-id="' + item_id +
                    '">';
                order_item_list += '<i class="fa fa-minus"></i>';
                order_item_list += '</a>';
                order_item_list += '</th>';

                // Total 
                order_item_list += '<th>';
                order_item_list += totalItemPrice;
                order_item_list += '</th>';

                // Action 
                order_item_list += '<th>';
                order_item_list += '<i class="fa fa-trash-can text-danger remove_order_item" data-id="' + item_id +
                    '"></i>';
                order_item_list += '</th>';

                order_item_list += '</tr>';
            }

            $('#orderItemList').html(order_item_list);
            totalAmountShow.value = 'Grand total: ' + (totalAmount).toLocaleString('en');
        }

        // RemoveItem
        $(document).on("click", ".remove_order_item", function() {
            var id = $(this).data('id');
            var url = '{{ url('remove_temporary_order_item') }}';
            $.ajax({
                url: url + '/' + id,
                method: "GET",
                success: function(data) {
                    audioPlay();
                    getTemporaryOrderItem();
                }
            });
        });

        // order_qty_minus
        $(document).on("click", ".order_qty_minus", function() {
            var id = $(this).data('id');
            var url = '{{ url('qty_minus_temporary_order_item') }}';
            $.ajax({
                url: url + '/' + id,
                method: "GET",
                success: function(data) {
                    audioPlay();
                    getTemporaryOrderItem();
                }
            });
        });

        // Order Note 
        $(document).on("click", ".add_order_note", function() {
            var id = $(this).data('id');
            $('#addFoodNote').modal('show');
            var url = '{{ url('get_order_note_temporary_order_item') }}';
            $.ajax({
                url: url + '/' + id,
                method: "GET",
                success: function(data) {
                    console.log(data);
                    $('#showFoodRemark').html(data.html);
                }
            });
        });

        // Save Order Note 
        $('.save_temporary_order_item_food_note').submit(function(e) {
            e.preventDefault();
            let form = $(this);
            let data = form.serializeArray();
            let temporary_order_item_id = form.find("input[name=temporary_order_item_id]").val();
            let foodnoteremark = form.find("textarea[name=foodnoteremark]").val();

            if (temporary_order_item_id == null || temporary_order_item_id == "") {
                alert("Something went wrong please try again");
                return false;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var url = '{{ url('add_order_note_temporary_order_item') }}';
            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    temporary_order_item_id: temporary_order_item_id,
                    foodnoteremark: foodnoteremark,
                },
                success: function(data) {
                    audioPlay();
                    getTemporaryOrderItem();
                },
                error: function(data) {}
            });
        })

        // add to customer 
        $('.store_customer').submit(function(e) {
            e.preventDefault();
            let form = $(this);
            let data = form.serializeArray();
            let customer_name = form.find("input[name=customer_name]").val();
            let email = form.find("input[name=email]").val();
            let mobile = form.find("input[name=mobile]").val();
            let address = form.find("textarea[name=address]").val();
            let remark = form.find("textarea[name=remark]").val();

            if (customer_name == null || customer_name == "") {
                return false;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var url = '{{ url('store_customer') }}';
            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    customer_name: customer_name,
                    email: email,
                    mobile: mobile,
                    address: address,
                    remark: remark,
                },
                success: function(data) {
                    getCustomerLists();
                    document.getElementById('customer_name').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('mobile').value = '';
                    document.getElementById('address').value = '';
                    document.getElementById('remark').value = '';
                },
                error: function(data) {}
            });
        })

        // Get Customer 
        function getCustomerLists() {
            var url = '{{ url('get_customer') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    showAllCustomer(data);
                }
            });
        }
        getCustomerLists();

        // Show All Customer 
        function showAllCustomer(res) {
            let customers = '';

            customers += '<option value="">';
            customers += '---Customer---';
            customers += '</option>';

            for (let i = 0; i < res.customers.length; i++) {
                let id = res.customers[i].id;
                let customer_name = res.customers[i].customer_name;
                customers += '<option value="' + id + '">';
                customers += customer_name;
                customers += '</option>';
            }
            $('#customerLists').html(customers);
        }

        $('.orderConfirm').submit(function(e) {
            e.preventDefault();
            let form = $(this);

            let customer_id = document.getElementById("customerLists").value;
            let table_list_id = document.getElementById("tableListId").value;

            if (table_list_id == null || table_list_id == "") {
                orderFailed();
                return false;
            }

            var url = '{{ url('store_order_confirm') }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    customer_id: customer_id,
                    table_list_id: table_list_id,
                },
                success: function(data) {
                    audioPlay();
                    orderSuccess();
                    getTemporaryOrderItem();
                },
                error: function(data) {}
            });
        })

        function audioPlay() {
            var song = new Audio();
            song.src = "{{ URL::asset('data/order_success.mp3') }}";
            song.play();
        }

        function orderFailed() {
            swal({
                    title: "Order Failed!!!",
                    text: "Order not placed due to some reason. Please Try Again!!!. Thank You !!!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {

                });
        }

        function orderSuccess() {
            swal({
                    title: "Order Success",
                    text: "Your order has been placed!",
                    icon: "success",
                    buttons: true,
                    dangerMode: false,
                })
                .then((willDelete) => {

                });
        }
    </script>
@endsection
