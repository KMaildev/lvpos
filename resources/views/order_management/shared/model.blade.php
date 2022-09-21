{{-- Food Note --}}
<div class="modal fade" id="addFoodNote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title" id="exampleModalLabel">
                    Food Note
                </h5>
            </div>
            <div class="modal-body pd-15">
                <div class="row">
                    <form class="save_temporary_order_item_food_note" action="#" method="POST">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="user_email">Food Note</label>
                                <div id="showFoodRemark"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success btn-md text-white">
                                Add Note
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-none">
            <div class="modal-body p-0">
                <div class="position-relative">
                    <div class="calcbody">
                        <form name="calc">
                            <div class="cacldisplay">
                                <input type="text" placeholder="0" name="displayResult" />
                            </div>
                            <div class="calcbuttons">
                                <div class="calcrow">
                                    <input type="button" name="c0" value="C" placeholder="0"
                                        onClick="calcNumbers(c0.value)">
                                    <button type="button" data-dismiss="modal" aria-label="Close"> <i
                                            class="fa fa-power-off" aria-hidden="true"></i> </button>
                                </div>
                                <div class="calcrow">
                                    <input type="button" name="b7" value="7" onClick="calcNumbers(b7.value)">
                                    <input type="button" name="b8" value="8" onClick="calcNumbers(b8.value)">
                                    <input type="button" name="b9" value="9" onClick="calcNumbers(b9.value)">
                                    <input type="button" name="addb" value="+"
                                        onClick="calcNumbers(addb.value)">
                                </div>
                                <div class="calcrow">
                                    <input type="button" name="b4" value="4" onClick="calcNumbers(b4.value)">
                                    <input type="button" name="b5" value="5" onClick="calcNumbers(b5.value)">
                                    <input type="button" name="b6" value="6" onClick="calcNumbers(b6.value)">
                                    <input type="button" name="subb" value="-"
                                        onClick="calcNumbers(subb.value)">
                                </div>
                                <div class="calcrow">
                                    <input type="button" name="b1" value="1" onClick="calcNumbers(b1.value)">
                                    <input type="button" name="b2" value="2" onClick="calcNumbers(b2.value)">
                                    <input type="button" name="b3" value="3"
                                        onClick="calcNumbers(b3.value)">
                                    <input type="button" name="mulb" value="*"
                                        onClick="calcNumbers(mulb.value)">
                                </div>
                                <div class="calcrow">
                                    <input type="button" name="b0" value="0"
                                        onClick="calcNumbers(b0.value)">
                                    <input type="button" name="potb" value="."
                                        onClick="calcNumbers(potb.value)">
                                    <input type="button" name="divb" value="/"
                                        onClick="calcNumbers(divb.value)">
                                    <input type="button" class="calcred" value="="
                                        onClick="displayResult.value = eval(displayResult.value)">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="payprint" class="modal fade  bd-example-modal-lg" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong>Select Your Payment Method</strong>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="payments" class="col-sm-4 col-form-label">Payment Method</label>
                                        <div class="col-sm-7 customesl">
                                            <select name="card_typesl" class="postform resizeselect form-control"
                                                id="card_typesl">
                                                <option value="">Select Method</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="cardarea wpr_100 display-none">
                                        <div class="form-group row">
                                            <label for="card_terminal" class="col-sm-4 col-form-label">Card
                                                Terminal</label>
                                            <div class="col-sm-7 customesl"> <select name="card_terminal"
                                                    class="postform resizeselect form-control" id="card_terminal">
                                                    <option value="" selected="selected">Select Card Terminal
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="bank" class="col-sm-4 col-form-label">Select Bank</label>
                                            <div class="col-sm-7 customesl"> <select name="bank"
                                                    class="postform resizeselect form-control" id="bank">
                                                    <option value="" selected="selected">Select Bank</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="4digit" class="col-sm-4 col-form-label">Last 4 Digit</label>
                                            <div class="col-sm-7 customesl">
                                                <input type="text" class="form-control" id="last4digit"
                                                    name="last4digit" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="4digit" class="col-sm-4 col-form-label">Total amount </label>
                                        <div class="col-sm-7 customesl">
                                            <input type="hidden" id="maintotalamount" name="maintotalamount"
                                                value="" />
                                            <input type="text" class="form-control" id="totalamount"
                                                name="totalamount" readonly="readonly" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="4digit" class="col-sm-4 col-form-label">Customer Payment</label>
                                        <div class="col-sm-7 customesl">
                                            <input type="number" class="form-control" id="paidamount"
                                                name="paidamount" placeholder="0" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="4digit" class="col-sm-4 col-form-label">Customer Payment</label>
                                        <div class="col-sm-7 customesl">
                                            <input type="text" class="form-control" id="change" name="change"
                                                readonly="readonly" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <div class="col-sm-11 pr-0">
                                            <button type="button" id="paidbill" class="btn btn-success w-md m-b-5"
                                                onclick="orderconfirmorcancel()">Pay Now & Print Invoice</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <form name="placenum">
                                        <div class="grid-container">
                                            <input type="button" class="grid-item" name="n1" value="1"
                                                onClick="inputNumbers(n1.value)">
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

<div id="paymentsselect" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong>Select Your Payment Method</strong>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="form-group row">
                                    <label for="payments" class="col-sm-4 col-form-label">Payment Method</label>
                                    <div class="col-sm-7 customesl">
                                        <select name="card_typesl" class="postform resizeselect form-control"
                                            id="card_typesl">
                                            <option value="">Select Method</option>
                                            <option value="1">Card Payment</option>
                                            <option value="2">2Checkout</option>
                                            <option value="3">Paypal</option>
                                            <option value="4" selected="selected">Cash Payments</option>
                                            <option value="5">SSL Commerz</option>
                                            <option value="6">Monthly Account</option>
                                            <option value="8">Square Payments</option>
                                            <option value="9">Stripe Payment</option>
                                            <option value="10">Paystack Payments</option>
                                            <option value="11">Paytm Payments</option>
                                            <option value="12">Nakit Ödeme</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="cardarea display-none wpr_100">
                                    <div class="form-group row">
                                        <label for="card_terminal" class="col-sm-4 col-form-label">Card
                                            Terminal</label>
                                        <div class="col-sm-7 customesl"> <select name="card_terminal"
                                                class="postform resizeselect form-control" id="card_terminal">
                                                <option value="" selected="selected">Select Card Terminal
                                                </option>
                                                <option value="1">Nexus Terminal</option>
                                                <option value="2">Brac Bank Terminal</option>
                                                <option value="3">Visa-Master Terminal</option>
                                                <option value="4">master</option>
                                                <option value="5">New</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bank" class="col-sm-4 col-form-label">Select Bank</label>
                                        <div class="col-sm-7 customesl"> <select name="bank"
                                                class="postform resizeselect form-control" id="bank">
                                                <option value="" selected="selected">Select Bank</option>
                                                <option value="1">Dutch-Bangla Bank</option>
                                                <option value="2">City Bank</option>
                                                <option value="3">Brac Bank</option>
                                                <option value="4">axis Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="4digit" class="col-sm-4 col-form-label">Last 4 Digit</label>
                                        <div class="col-sm-7 customesl">
                                            <input type="text" class="form-control" id="last4digit"
                                                name="last4digit" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <div class="col-sm-11 pr-0">
                                        <button type="button" class="btn btn-success w-md m-b-5"
                                            onclick="onlinepay()">Pay Now</button>
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

<div id="cancelord" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong>Cancel Order</strong>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="form-group row">
                                    <label for="payments" class="col-sm-4 col-form-label">Order ID</label>
                                    <div class="col-sm-7 customesl"> <span id="canordid"></span>
                                        <input name="mycanorder" id="mycanorder" type="hidden" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="canreason" class="col-sm-4 col-form-label">Cancel Reason</label>
                                    <div class="col-sm-7 customesl">
                                        <textarea name="canreason" id="canreason" cols="35" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <div class="col-sm-11 pr-0">
                                        <button type="button" class="btn btn-success w-md m-b-5"
                                            id="cancelreason">Submit </button>
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

<div id="edit" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong>
                </strong>
            </div>
            <div class="modal-body addonsinfo"> </div>
        </div>
        <div class="modal-footer"> </div>
    </div>
</div>
<!-- 22-09 -->
<div id="payprint_marge" class="modal fade  bd-example-modal-lg" role="dialog">
    <div class="modal-dialog modal-lg" id="modal-ajaxview"> </div>
</div>
<div id="tablemodal" class="modal fade  bd-example-modal-lg" role="dialog">
    <div class="modal-dialog modal-inner" id="table-ajaxview"> </div>
</div>
<div id="payprint_split" class="modal fade  bd-example-modal-lg" role="dialog">
    <div class="modal-dialog modal-lg" id="modal-ajaxview-split"> </div>
</div>

<form action="https://restaurant.bdtask.com/demo-classic/ordermanage/order/insert_customer" method="post"
    class="form-vertical" id="validate" accept-charset="utf-8">
    <input type="hidden" name="csrf_test_name" value="6d40ec976a49f4fab0c9a99c3586021b" />
    <div class="modal fade modal-warning" id="client-info" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Add Customer</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Customer name <i
                                class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input class="form-control simple-control" name="customer_name" id="name"
                                type="text" placeholder="Customer Name" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email Address <i
                                class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input class="form-control" name="email" id="email" type="email"
                                placeholder="Customer Email" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-sm-3 col-form-label">Mobile <i
                                class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input class="form-control" name="mobile" id="mobile" type="number"
                                placeholder="Customer Mobile" required="" min="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address " class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="address" id="address " rows="3" placeholder="Customer Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address " class="col-sm-3 col-form-label">Favorite Address</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="favaddress" id="favaddress " rows="3" placeholder="Customer Address"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                    <button type="submit" class="btn btn-success">Submit </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>

<div class="modal fade modal-warning" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"></h3>
            </div>
            <form id="updateCart" action="#" method="post">
                <div class="modal-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th class="wpr_25">Price</th>
                                <th class="wpr_25"><span id="net_price" class="price"></span></th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group row">
                        <label for="available_quantity" class="col-sm-4 col-form-label">Ava. Qnty</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="available_quantity"
                                placeholder="Ava. Qnty" name="available_quantity" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unit" class="col-sm-4 col-form-label">Unit</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="unit" placeholder="Unit"
                                name="unit" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Qnty" class="col-sm-4 col-form-label">Qnty <span
                                class="color-red">*</span></label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="Qnty" name="quantity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Rate" class="col-sm-4 col-form-label">Rate <span
                                class="color-red">*</span></label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="Rate" name="rate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Dis/ Pcs" class="col-sm-4 col-form-label">Dis/ Pcs</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="Dis/ Pcs" placeholder="Dis/ Pcs"
                                name="discount">
                        </div>
                    </div>
                    <input type="hidden" name="rowID">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
