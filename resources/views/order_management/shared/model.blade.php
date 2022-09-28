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

{{-- Calculator --}}
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

{{-- Customer Add --}}
<form action="#" method="post" class="form-vertical store_customer" accept-charset="utf-8" autocomplete="off">
    <div class="modal fade modal-warning" id="client-info" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title">Add Customer</h3>
                </div>

                <div class="modal-body">

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">
                            Name
                            <i class="text-danger">*</i>
                        </label>
                        <div class="col-sm-6">
                            <input class="form-control simple-control" name="customer_name" id="customer_name"
                                type="text" placeholder="Customer Name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">
                            Email Address
                        </label>
                        <div class="col-sm-6">
                            <input class="form-control" name="email" id="email" type="email"
                                placeholder="Customer Email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mobile" class="col-sm-3 col-form-label">
                            Mobile
                        </label>
                        <div class="col-sm-6">
                            <input class="form-control" name="mobile" id="mobile" type="text"
                                placeholder="Customer Mobile" min="0">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address " class="col-sm-3 col-form-label">
                            Address
                        </label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Customer Address"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address " class="col-sm-3 col-form-label">
                            Remark
                        </label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="remark" id="remark" rows="3" placeholder="Remark"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>

                    <button type="submit" class="btn btn-success">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>