<div class="row pos">
    <div class="panel">
        <div class="panel-body">
            <!-- Top  -->
            <div class="tabsection">
                <span class="display-none">english</span>
                <ul class="nav nav-tabs mb-2" role="tablist">
                    <li>
                        <a href="https://restaurant.bdtask.com/demo-classic/dashboard/home" class="maindashboard"><i
                                class="fa fa-home"></i>
                        </a>
                    </li>

                    <li class="active">
                        <a href="#home" role="tab" data-toggle="tab" title="New Order" id="fhome" autofocus
                            class="home newtab" onclick="giveselecttab(this)">
                            <i class="fa fa-plus smallview"></i>
                            <span class="responsiveview">New Order</span> </a>
                    </li>

                    <li>
                        <a href="#profile" role="tab" data-toggle="tab" class="ongord newtab" id="ongoingorder"
                            onclick="giveselecttab(this)"><i class="fa fa-hourglass-start smallview"></i> <span
                                class="responsiveview">On Going Order</span> </a>
                    </li>

                    <li class="mobiletag">
                        <!-- for language -->
                        <div class="dropdown dropdown-user">
                            <a href="#" class="btn dropdown-toggle lang_box" data-toggle="dropdown">ENG</a>
                            <ul class="dropdown-menu lang_options">
                                <li><a href="javascript:;" onclick="addlang(this)"
                                        data-url="https://restaurant.bdtask.com/demo-classic/hungry/setlangue/english">
                                        English</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <div class="tgbar">
                    <div class="dropdown">
                        <a class="dropdown-toggle lang_box" type="button" data-toggle="dropdown">ENG <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu lang_options">
                            <li><a href="javascript:;" onclick="addlang(this)"
                                    data-url="https://restaurant.bdtask.com/demo-classic/hungry/setlangue/english">
                                    English</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tab panes -->
            <div class="tab-content tab-content-xs">
                <div class="tab-pane fade active in" id="home">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel">
                                <div class="row">
                                    <!-- Item & Info  -->
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form class="navbar-search" method="get" action="#">
                                                    <label class="sr-only screen-reader-text" for="search">Search
                                                        :</label>
                                                    <div class="input-group">
                                                        <select id="product_name"
                                                            class="form-control dont-select-me  search-field"
                                                            dir="ltr" name="s">
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="product-category">
                                                    <div class="listcat">All </div>
                                                </div>

                                                <div class="product-category">
                                                    <div class="listcat">All </div>
                                                </div>

                                                <div class="product-category">
                                                    <div class="listcat">All </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div style="height:100%">
                                                    <div class="product-grid">
                                                        <div class="row row-m-3" id="product_search">
                                                            <!-- Item List  -->
                                                            @for ($i = 0; $i < 100; $i++)
                                                                <div
                                                                    class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-p-3">
                                                                    <div
                                                                        class="panel panel-bd product-panel select_product">
                                                                        <div class="panel-body">
                                                                            <img src="https://restaurant.bdtask.com/demo-classic/application/modules/itemmanage/assets/images/small/08.png"
                                                                                class="img-responsive"
                                                                                alt="Bangla Set Menu Rice Boarta">
                                                                            <input type="hidden"
                                                                                name="select_product_id"
                                                                                class="select_product_id"
                                                                                value="2">
                                                                            <input type="hidden"
                                                                                name="select_totalvarient"
                                                                                class="select_totalvarient"
                                                                                value="2">
                                                                            <input type="hidden"
                                                                                name="select_iscustomeqty"
                                                                                class="select_iscustomeqty"
                                                                                value="0">
                                                                            <input type="hidden"
                                                                                name="select_product_size"
                                                                                class="select_product_size"
                                                                                value="2">
                                                                            <input type="hidden"
                                                                                name="select_product_isgroup"
                                                                                class="select_product_isgroup"
                                                                                value="">
                                                                            <input type="hidden"
                                                                                name="select_product_cat"
                                                                                class="select_product_cat"
                                                                                value="2">
                                                                            <input type="hidden"
                                                                                name="select_varient_name"
                                                                                class="select_varient_name"
                                                                                value="1:2">
                                                                            <input type="hidden"
                                                                                name="select_product_name"
                                                                                class="select_product_name"
                                                                                value="Bangla Set Menu Rice Boarta">
                                                                            <input type="hidden"
                                                                                name="select_product_price"
                                                                                class="select_product_price"
                                                                                value="24.00">
                                                                            <input type="hidden" name="select_addons"
                                                                                class="select_addons" value="1">
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            <span>
                                                                                Bangla Set Menu Rice Boarta (1:2)
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Customer & Order Info  -->
                                    <div class="col-md-5">
                                        <form action="" class="form-vertical" id="onlineordersubmit"
                                            enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="customer_name">Customer name <span
                                                            class="color-red">*</span></label>
                                                    <div class="d-flex">
                                                        <select name="" id=""
                                                            class="postform resizeselect form-control">
                                                            <option value="">Customer</option>
                                                        </select>
                                                        <button type="button" class="btn btn-primary ml-l"
                                                            aria-hidden="true" data-toggle="modal"
                                                            data-target="#client-info"><i
                                                                class="ti-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="store_id">Customer type <span
                                                            class="color-red">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <select name="ctypeid" class="form-control" id="ctypeid"
                                                        required>
                                                        <option value="">Select Customer Type</option>
                                                    </select>
                                                </div>
                                                <div id="nonthirdparty" class="col-md-12">
                                                    <div class="row">

                                                        <div class="col-md-4 form-group">
                                                            <label for="store_id">Waiter <span
                                                                    class="color-red">*</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                            <select name="waiter" class="form-control"
                                                                id="waiter" required>
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
                                                            <input type="hidden" id="table_member"
                                                                name="table_member" class="form-control"
                                                                value="" />
                                                        </div>
                                                        <div class="col-md-3 form-group" id="tblsec">

                                                            <label for="store_id">Table <span
                                                                    class="color-red">*</span></label>
                                                            <select name="tableid"
                                                                class="postform resizeselect form-control"
                                                                id="tableid" required onchange="checktable()">
                                                                <option value="" selected="selected">Select
                                                                    Table</option>
                                                            </select>
                                                            <input type="hidden" id="table_member_multi"
                                                                name="table_member_multi" class="form-control"
                                                                value="0" />
                                                            <input type="hidden" id="table_member_multi_person"
                                                                name="table_member_multi_person" class="form-control"
                                                                value="0" />

                                                        </div>
                                                        <div class="col-md-3 form-group" id="cookingtime">
                                                            <label for="Cooked Time">Cooking Time</label>
                                                            <input name="cookedtime" type="text"
                                                                class="form-control timepicker3" id="cookedtime"
                                                                placeholder="00:00:00" autocomplete="off" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div id="thirdparty" style="display: none;">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="store_id">Delivery Company <span
                                                                    class="color-red">*</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                            <select name="delivercom" class="form-control wpr_95"
                                                                id="delivercom" required disabled="disabled">
                                                                <option value="" selected="selected">Select
                                                                    Delivary Company</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="third_id">Third-party Order
                                                                ID&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                            <input name="thirdinvoiceid" type="text"
                                                                class="form-control" id="thirdinvoiceid">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" type="hidden" id="order_date"
                                                        name="order_date" required value="20-09-2022" />
                                                    <input class="form-control" type="hidden" id="bill_info"
                                                        name="bill_info" required value="1" />
                                                </div>
                                            </div>
                                            <div class="productlist">
                                                <div class="product-list pdlist">
                                                    <div class="table-responsive" id="addfoodlist">
                                                        <input name="subtotal" id="subtotal" type="hidden"
                                                            value="0" />

                                                        <input name="multiplletaxvalue" id="multiplletaxvalue"
                                                            type="hidden" value="a:0:{}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fixedclasspos">
                                                <div class="row d-flex flex-wrap align-items-center">
                                                    <div class="col-sm-6 leftview">
                                                        <input name="distype" id="distype" type="hidden"
                                                            value="1" />
                                                        <input name="sdtype" id="sdtype" type="hidden"
                                                            value="1" />
                                                        <input type="hidden" id="orginattotal" value="0"
                                                            name="orginattotal">
                                                        <input type="hidden" id="invoice_discount"
                                                            class="form-control text-right" name="invoice_discount"
                                                            value="0">
                                                        <table class="table table-bordered footersumtotal">
                                                            <tr>
                                                                <td>
                                                                    <div class="row m-0">
                                                                        <label for="date"
                                                                            class="col-sm-8 mb-0">Vat/Tax: </label>
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
                                                                <td rowspan="2"><label for="date"
                                                                        class="mb-0 col-sm-6">Grand total :</label>
                                                                    <label class="col-sm-6 p-0 mb-0">
                                                                        <input type="hidden" id="orggrandTotal"
                                                                            value="0" name="orggrandTotal">
                                                                        <input name="grandtotal" type="hidden"
                                                                            value="0" id="grandtotal" />
                                                                        <span
                                                                            class="badge badge-primary grandbg font-26"><strong>
                                                                                <span id="caltotal">0</span>
                                                                            </strong></span></label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><label for="date"
                                                                        class="col-sm-8 mb-0">Service Charge (%)
                                                                        :</label>
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
                                                    <div class="col-sm-6 text-right"> <a
                                                            class="btn btn-primary cusbtn" data-toggle="modal"
                                                            data-target="#exampleModal"><i class="fa fa-calculator"
                                                                aria-hidden="true"></i></a> <a
                                                            href="https://restaurant.bdtask.com/demo-classic/ordermanage/order/posclear"
                                                            type="button" class="btn btn-danger cusbtn">Cancel </a>
                                                        <input type="hidden" id="getitemp" name="getitemp"
                                                            value="0" />
                                                        <input type="button" id="add_payment2"
                                                            class="btn btn-primary btn-large cusbtn"
                                                            onclick="quickorder()" name="add-payment"
                                                            value="Quick Order">
                                                        <input type="button" id="add_payment"
                                                            class="btn btn-success btn-large cusbtn"
                                                            onclick="placeorder()" name="add-payment"
                                                            value="Place Order">


                                                        <input type="hidden" id="production_setting" value="0">
                                                        <input type="hidden" id="production_url"
                                                            value="https://restaurant.bdtask.com/demo-classic/production/production/ingredientcheck">
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
