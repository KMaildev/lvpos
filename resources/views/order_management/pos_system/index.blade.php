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
                                                    <div style="height:100%">
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
                                            <form action="" class="form-vertical" id="onlineordersubmit"
                                                enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                <div class="row">

                                                    <div class="col-md-6 form-group">
                                                        <label for="customer_name">Customer name
                                                            <span class="color-red">*</span>
                                                        </label>
                                                        <div class="d-flex">
                                                            <select name="" id=""
                                                                class="postform resizeselect form-control">
                                                                <option value="">Customer</option>
                                                            </select>
                                                            <button type="button" class="btn btn-primary ml-l"
                                                                aria-hidden="true" data-toggle="modal"
                                                                data-target="#client-info">
                                                                <i class="ti-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="store_id">
                                                            Customer type
                                                            <span class="color-red">*</span>
                                                        </label>
                                                        <select name="ctypeid" class="form-control" id="ctypeid" required>
                                                            <option value="">Select Customer Type</option>
                                                        </select>
                                                    </div>

                                                    <div id="nonthirdparty" class="col-md-12">
                                                        <div class="row">

                                                            <div class="col-md-4 form-group">
                                                                <label for="store_id">Waiter
                                                                    <span class="color-red">*</span>
                                                                </label>
                                                                <select name="waiter" class="form-control" id="waiter"
                                                                    required>
                                                                    <option value="">Select Waiter</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-2 form-group pl-0" id="tblsecp">
                                                                <label for="store_id" class="wpr_100 person"> <span
                                                                        class="color-red">&nbsp;&nbsp;</span></label>
                                                                <input name="" type="button"
                                                                    class="btn btn-primary  form-control width-auto"
                                                                    onclick="showTablemodal()" id="table_person"
                                                                    value="Person">
                                                                <input type="hidden" id="table_member" name="table_member"
                                                                    class="form-control" value="" />
                                                            </div>

                                                            <div class="col-md-3 form-group" id="tblsec">
                                                                <label for="store_id">Table
                                                                    <span class="color-red">*</span>
                                                                </label>
                                                                <select name="tableid"
                                                                    class="postform resizeselect form-control"
                                                                    id="tableid" required onchange="checktable()">
                                                                    <option value="" selected="selected">
                                                                        Select Table
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Order Items --}}
                                                <div class="productlist">
                                                    <div class="slimScrollDiv"
                                                        style="position: relative; overflow: hidden; width: auto; height: 345px;">
                                                        <div class="product-list pdlist"
                                                            style="overflow: hidden; width: auto; height: 345px;">
                                                            <div class="table-responsive" id="addfoodlist">
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
                                                                    <tbody class="itemNumber">
                                                                        <tr id="1">
                                                                            {{-- Item Name --}}
                                                                            <th id="product_name_MFU4E">
                                                                                Satay chicken<br>
                                                                                <a class="serach pl-15"
                                                                                    onclick="itemnote('01ff4b44c7eab1494a03c1c0d9ea85a5','',1,2)"
                                                                                    title="Food Note">
                                                                                    <i class="fa fa-sticky-note"
                                                                                        aria-hidden="true">
                                                                                    </i>
                                                                                </a>
                                                                            </th>

                                                                            {{-- Price --}}
                                                                            <td>
                                                                                650
                                                                            </td>

                                                                            {{-- Qty --}}
                                                                            <td scope="row">
                                                                                <a class="btn btn-info btn-sm btnleftalign"
                                                                                    onclick="posupdatecart('01ff4b44c7eab1494a03c1c0d9ea85a5',14,15,1,'add')">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                                <span id="productionsetting-14-15">
                                                                                    1
                                                                                </span>
                                                                                <a class="btn btn-danger btn-sm btnrightalign"
                                                                                    onclick="posupdatecart('01ff4b44c7eab1494a03c1c0d9ea85a5',14,15,1,'del')">
                                                                                    <i class="fa fa-minus"></i>
                                                                                </a>
                                                                            </td>

                                                                            {{-- Total --}}
                                                                            <td>
                                                                                650
                                                                            </td>

                                                                            {{-- Action --}}
                                                                            <td>
                                                                                <a class="btn btn-danger btn-sm btnrightalign"
                                                                                    onclick="removecart('01ff4b44c7eab1494a03c1c0d9ea85a5')">
                                                                                    <i class="fa fa-trash-o"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Button Procress --}}
                                                <div class="fixedclasspos">
                                                    <div class="row d-flex flex-wrap align-items-center">
                                                        <div class="col-sm-6 leftview">
                                                            <table class="table table-bordered footersumtotal">
                                                                <tr>
                                                                    <td>
                                                                        <div class="row m-0">
                                                                            <label for="date"
                                                                                class="col-sm-8 mb-0">Vat/Tax:
                                                                            </label>
                                                                            <label class="col-sm-4 mb-0">
                                                                                <input type="hidden" id="vat"
                                                                                    name="vat" value="0" />
                                                                            </label>
                                                                            <strong>
                                                                                <span id="calvat"> 0</span>
                                                                            </strong>
                                                                            </label>
                                                                        </div>
                                                                    </td>

                                                                    <td rowspan="2">
                                                                        <label for="date" class="mb-0 col-sm-6">
                                                                            Grand total :
                                                                        </label>
                                                                        <label class="col-sm-6 p-0 mb-0">
                                                                            <input type="hidden" id="orggrandTotal"
                                                                                value="0" name="orggrandTotal">
                                                                            <input name="grandtotal" type="hidden"
                                                                                value="0" id="grandtotal" />
                                                                            <span
                                                                                class="badge badge-primary grandbg font-26">
                                                                                <strong>
                                                                                    <span id="caltotal">0</span>
                                                                                </strong>
                                                                            </span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label for="date" class="col-sm-8 mb-0">
                                                                            Service Charge (%) :
                                                                        </label>
                                                                        <div class="col-sm-4 p-0">
                                                                            <input type="text" id="service_charge"
                                                                                onkeyup="calculatetotal();"
                                                                                class="form-control text-right mb-5"
                                                                                value="0" name="service_charge"
                                                                                placeholder="0.00" />
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                        <div class="col-sm-6 text-right">
                                                            <a class="btn btn-primary cusbtn" data-toggle="modal"
                                                                data-target="#exampleModal">
                                                                <i class="fa fa-calculator" aria-hidden="true"></i>
                                                            </a>

                                                            <input type="button" id="add_payment2"
                                                                class="btn btn-primary btn-large cusbtn"
                                                                onclick="quickorder()" name="add-payment"
                                                                value="Quick Order">

                                                            <input type="button" id="add_payment"
                                                                class="btn btn-success btn-large cusbtn"
                                                                onclick="placeorder()" name="add-payment"
                                                                value="Place Order">

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
                    console.log(data)
                }
            });
        }

        function audioPlay() {
            var song = new Audio();
            song.src = "{{ URL::asset('data/order_success.mp3') }}";
            song.play();
        }
    </script>
@endsection
