@section('script')
    {{-- Counter Module  --}}
    <script type="text/javascript">
        // Get All Order 
        function getOrderLists() {
            var url = '{{ url('get_order_info') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    showOrderLists(data);
                }
            });
        }
        getOrderLists();
        setInterval(getOrderLists, 10000);
        // 10 Sec

        // Search Input
        $('#searchOrderList').on('input', function() {
            searchOrderList();
        });

        function searchOrderList() {
            var keyword = $('#searchOrderList').val();
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

        // Show Invoice
        $(document).on("click", ".show_invoice", function() {
            var id = $(this).data('id');
            var url = '{{ url('show_order_info') }}';
            $.ajax({
                url: url + '/' + id,
                method: "GET",
                success: function(data) {
                    $('.viewInvoiceRender').html(data.html);
                    audioPlay();
                }
            });
        });

        // Submit Payment 
        function submitPayment(order_info_id, amount) {
            if (order_info_id == null || order_info_id == "") {
                pricressFailed();
                return false;
            }

            if (amount == null || amount == "") {
                pricressFailed();
                return false;
            }
            swal({
                    title: "Payment Process",
                    text: "Are you sure continue to this process?",
                    icon: "success",
                    buttons: true,
                    dangerMode: false,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ url('store_bill_info') }}';
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            method: 'POST',
                            url: url,
                            data: {
                                order_info_id: order_info_id,
                                amount: amount,
                            },
                            success: function(data) {
                                paymentSuccess();
                                getCounterOrderLists();
                                // $('.viewInvoiceRender').html('');
                            },
                            error: function(data) {}
                        });
                    } else {
                        swal("The process has been canceled.");
                    }
                });
        }

        // Print Invoice 
        function printInvoice() {
            printJS({
                printable: "printArea",
                type: "html",
                css: [
                    "{{ asset('assets/css/bill.css') }}"
                ],
                scanStyles: false
            });
        }
    </script>


    {{-- Order Management --}}
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
                    console.log(data)
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
                    "_token": "{{ csrf_token() }}",
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
            swal({
                    title: "Order Process",
                    text: "Are you sure want to order?",
                    icon: "success",
                    buttons: true,
                    dangerMode: false,
                })
                .then((willDelete) => {
                    if (willDelete) {
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
                                console.log(data);
                                audioPlay();
                                orderSuccess();
                                getTemporaryOrderItem();
                            },
                            error: function(data) {
                                console.log(data);
                            }
                        });
                    } else {
                        swal("The process has been canceled.");
                    }
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

        // TableId Set 
        function setTableId(table_id, table_name) {
            document.getElementById("tableListId").value = table_id;
            document.getElementById("tableNameForShow").value = table_name;
            audioPlay();
            $('#showTableLists').modal('hide');
        }


        // On Going Order
        function getOnGoingOrder() {
            var url = '{{ url('get_on_goind_order') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    $('.viewOnGoingOrderList').html(data.html);
                }
            });
        }
        getOnGoingOrder();
    </script>


    {{-- kitchen Module  --}}
    <script type="text/javascript">
        // Get All Order 
        function getOrderInfoPreparation() {
            var url = '{{ url('get_order_info_preparation') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    $('.viewOrderInfoPreparation').html(data.html);
                }
            });
        }
        getOrderInfoPreparation();
        setInterval(getOrderInfoPreparation, 10000); //10 Sec
        // setInterval(getOrderInfoPreparation, 5000);

        // Order Item Status 
        function changeOrderItemStatus(order_item_id, order_status) {

            if (order_item_id == null || order_item_id == "" || order_status == null || order_status == "") {
                pricressFailed();
                return false;
            }

            var url = '{{ url('update_order_preparation_status') }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    order_item_id: order_item_id,
                    order_status: order_status,
                },
                success: function(data) {
                    getOrderInfoPreparation();
                    getManagerCurrentOrder();
                },
                error: function(data) {
                    pricressFailed();
                }
            });
        }

        // AllPreparation
        function changeAllOrderItem(order_info_id, order_status) {
            if (order_info_id == null || order_info_id == "") {
                pricressFailed();
                return false;
            }

            var url = '{{ url('update_all_item_status') }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    order_info_id: order_info_id,
                    order_status: order_status,
                },
                success: function(data) {
                    getOrderInfoPreparation();
                    getManagerCurrentOrder();
                },
                error: function(data) {
                    pricressFailed();
                }
            });
        }

        // Get All Order 
        function getOrderInfoDone() {
            var url = '{{ url('get_order_info_done') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    $('.viewOrderInfoDone').html(data.html);
                }
            });
        }
        getOrderInfoDone();
        setInterval(getOrderInfoDone, 50000); //50 Sec
    </script>


    {{-- Counter  --}}
    <script>
        // Search Input
        $('#searchCounterOrderList').on('input', function() {
            searchCounterOrderList();
        });

        function searchCounterOrderList() {
            var keyword = $('#searchCounterOrderList').val();
            var url = '{{ url('get_counter_order') }}';
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    keyword: keyword,
                },
                success: function(data) {
                    showCounterOrderLists(data);
                }
            });
        }

        // Get All Order 
        function getCounterOrderLists() {
            var url = '{{ url('get_counter_order') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    showCounterOrderLists(data);
                }
            });
        }
        getCounterOrderLists();

        // Show Order Lists 
        function showCounterOrderLists(res) {
            let order_info = '';
            for (let i = 0; i < res.order_infos.length; i++) {
                order_info += '<tr class="hover-primary show_invoice_items" data-id="' + res.order_infos[i].id + '">';

                order_info += '<td>1</td>';

                // Order No
                order_info += '<td>';
                order_info += res.order_infos[i].order_no;
                order_info += '</td>';

                // Bill No
                order_info += '<td>';
                order_info += res.order_infos[i].bill_no;
                order_info += '</td>';

                // Date
                order_info += '<td>';
                order_info += res.order_infos[i].order_date;
                order_info += '</td>';

                // Table Name 
                order_info += '<td>';
                order_info += res.order_infos[i].table_lists_table.table_name;
                order_info += '</td>';

                // Waiter
                order_info += '<td>';
                order_info += res.order_infos[i].users_table.name;
                order_info += '</td>';

                order_info += '</tr>';
            }

            if (res.order_infos.length <= 0) {
                order_info += '<h1 style="color: red; padding: 20px;">';
                order_info += 'No data found.';
                order_info += '</h1>';
            }

            $('#orderCounterInfos').html(order_info);
        }

        // Invoice Items 
        $(document).on("click", ".show_invoice_items", function() {
            var id = $(this).data('id');
            var url = '{{ url('counter_order_info_items') }}';
            $.ajax({
                url: url + '/' + id,
                method: "GET",
                success: function(data) {
                    $('.viewInvoiceRender').html(data.html);
                    $('#showInvoiceItemsData').modal('show');
                    audioPlay();
                }
            });
        });



        // Completed  Procress

        // Search Input
        $('#searchOrderInfoFinished').on('input', function() {
            searchOrderInfoFinished();
        });

        function searchOrderInfoFinished() {
            var keyword = $('#searchOrderInfoFinished').val();
            var url = '{{ url('get_order_info_finished') }}';
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    keyword: keyword,
                },
                success: function(data) {
                    showCompletedOrderLists(data);
                }
            });
        }

        // Get All Order 
        function getCompletedOrderLists() {
            var url = '{{ url('get_order_info_finished') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    showCompletedOrderLists(data);
                }
            });
        }
        getCompletedOrderLists();


        // Show Completed Order Lists 
        function showCompletedOrderLists(res) {
            let order_info = '';

            for (let i = 0; i < res.order_infos.length; i++) {
                let customer_name = '';
                if (res.order_infos[i].customer_id == 0) {
                    customer_name = '';
                } else {
                    customer_name = res.order_infos[i].customer_table.customer_name;
                }

                order_info += '<tr class="hover-primary finished_invoice_items" data-id="' + res.order_infos[i].id +
                    '">';

                order_info += '<td>1</td>';

                // Order No
                order_info += '<td>';
                order_info += res.order_infos[i].order_no;
                order_info += '</td>';

                // Bill No
                order_info += '<td>';
                order_info += res.order_infos[i].bill_no;
                order_info += '</td>';

                // Customer
                order_info += '<td>';
                order_info += customer_name;
                order_info += '</td>';

                // Date
                order_info += '<td>';
                order_info += res.order_infos[i].order_date;
                order_info += '</td>';

                // Date
                order_info += '<td>';
                order_info += res.order_infos[i].check_out_time;
                order_info += '</td>';

                // Table Name 
                order_info += '<td>';
                order_info += res.order_infos[i].table_lists_table.table_name;
                order_info += '</td>';

                // Waiter
                order_info += '<td>';
                order_info += res.order_infos[i].users_table.name;
                order_info += '</td>';

                // check_out_users_table
                order_info += '<td>';
                order_info += res.order_infos[i].check_out_users_table.name;
                order_info += '</td>';

                order_info += '</tr>';
            }

            if (res.order_infos.length <= 0) {
                order_info += '<h1 style="color: red; padding: 20px;">';
                order_info += 'No data found.';
                order_info += '</h1>';
            }

            $('#getOrderInfoFinished').html(order_info);
        }


        // Invoice Items 
        $(document).on("click", ".finished_invoice_items", function() {
            var id = $(this).data('id');
            var url = '{{ url('get_invoice_order_info_finished') }}';
            $.ajax({
                url: url + '/' + id,
                method: "GET",
                success: function(data) {
                    $('.viewInvoiceRender').html(data.html);
                    $('#showInvoiceItemsData').modal('show');
                    audioPlay();
                }
            });
        });
    </script>



    {{-- Manager  --}}
    <script>
        // Get All Order 
        function getManagerCurrentOrder() {
            var url = '{{ url('get_manager_current_order') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    $('.viewManagerCurrentOrder').html(data.html);
                }
            });
        }
        getManagerCurrentOrder();
        setInterval(getManagerCurrentOrder, 10000); //10 Sec

        // Search Input
        $('#searchManagerCurrentOrder').on('input', function() {
            searchManagerCurrentOrder();
        });

        function searchManagerCurrentOrder() {
            var keyword = $('#searchManagerCurrentOrder').val();
            var url = '{{ url('get_manager_current_order') }}';
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    keyword: keyword,
                },
                success: function(data) {
                    $('.viewManagerCurrentOrder').html(data.html);
                }
            });
        }

        // Manager Remark 
        $(document).on("keyup", ".updateManagerRemark", function() {
            var id = $(this).data('id');
            var value = $(this).val();

            var url = '{{ url('update_manager_remark') }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'GET',
                url: url,
                data: {
                    id: id,
                    value: value,
                },
                success: function(data) {
                    console.log(data)
                    // getManagerCurrentOrder();
                    getOrderInfoPreparation();
                },
                error: function(data) {
                    console.log(data)
                }
            });
        });



        // Table Change 
        function tableChangeModal(id) {
            var url = '{{ url('get_current_table') }}';
            $.ajax({
                url: url + '/' + id,
                method: "GET",
                success: function(data) {
                    $('#showTableChangeModal').modal('show');
                    document.getElementById('CurrentTableId').value = data.order_info.table_lists_table
                        .table_name;
                    document.getElementById('CurrentOrderInfoId').value = data.order_info.id;
                }
            });
        }

        function setTableChange(table_id, table_name) {
            document.getElementById('NewTableId').value = table_id;
            document.getElementById('NewTableName').value = table_name;
            audioPlay();
        }
    </script>

    {{-- Search  --}}
    <script>
        function orderPreparationCount() {
            var url = '{{ url('get_counter') }}';
            $.ajax({
                url: url,
                method: "GET",
                success: function(data) {
                    $("#orderTotalPreparation").text(data.order_total_treparation);
                }
            });
        }
        orderPreparationCount();
        setInterval(orderPreparationCount, 10000); //10 Sec

        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".order_preparation tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
