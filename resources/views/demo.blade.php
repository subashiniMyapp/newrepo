<form method="post" id="invoice_form">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <td colspan="2" align="center">
                    <h2 style="margin-top:10.5px">Create Invoice</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="row">
                        <div class="col-md-8">
                            To,<br />
                            <b>RECEIVER (BILL TO)</b><br />
                            <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-sm" placeholder="Enter Receiver Name" />
                            <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" placeholder="Enter Billing Address"></textarea>
                        </div>
                        <div class="col-md-4">
                            Reverse Charge<br />
                            <input type="text" name="order_no" id="order_no" class="form-control input-sm" placeholder="Enter Invoice No." />
                            <input type="text" name="order_date" id="order_date" class="form-control input-sm" readonly placeholder="Select Invoice Date" />
                        </div>
                    </div>
                    <br />
                    <table id="invoice-item-table" class="table table-bordered">
                        <tr>
                            <th width="7%">Sr No.</th>
                            <th width="20%">Item Name</th>
                            <th width="5%">Quantity</th>
                            <th width="5%">Price</th>
                            <th width="10%">Actual Amt.</th>
                            <th width="12.5%" colspan="2">Tax1 (%)</th>
                            <th width="12.5%" colspan="2">Tax2 (%)</th>
                            <th width="12.5%" colspan="2">Tax3 (%)</th>
                            <th width="12.5%" rowspan="2">Total</th>
                            <th width="3%" rowspan="2"></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Rate</th>
                            <th>Amt.</th>
                            <th>Rate</th>
                            <th>Amt.</th>
                            <th>Rate</th>
                            <th>Amt.</th>
                        </tr>
                        <tr>
                            <td><span id="sr_no">1</span></td>
                            <td><input type="text" name="item_name[]" id="item_name1" class="form-control input-sm" /></td>
                            <td><input type="text" name="order_item_quantity[]" id="order_item_quantity1" data-srno="1" class="form-control input-sm order_item_quantity" /></td>
                            <td><input type="text" name="order_item_price[]" id="order_item_price1" data-srno="1" class="form-control input-sm number_only order_item_price" /></td>
                            <td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount1" data-srno="1" class="form-control input-sm order_item_actual_amount" readonly /></td>
                            <td><input type="text" name="order_item_tax1_rate[]" id="order_item_tax1_rate1" data-srno="1" class="form-control input-sm number_only order_item_tax1_rate" /></td>
                            <td><input type="text" name="order_item_tax1_amount[]" id="order_item_tax1_amount1" data-srno="1" readonly class="form-control input-sm order_item_tax1_amount" /></td>
                            <td><input type="text" name="order_item_tax2_rate[]" id="order_item_tax2_rate1" data-srno="1" class="form-control input-sm number_only order_item_tax2_rate" /></td>
                            <td><input type="text" name="order_item_tax2_amount[]" id="order_item_tax2_amount1" data-srno="1" readonly class="form-control input-sm order_item_tax2_amount" /></td>
                            <td><input type="text" name="order_item_tax3_rate[]" id="order_item_tax3_rate1" data-srno="1" class="form-control input-sm number_only order_item_tax3_rate" /></td>
                            <td><input type="text" name="order_item_tax3_amount[]" id="order_item_tax3_amount1" data-srno="1" readonly class="form-control input-sm order_item_tax3_amount" /></td>
                            <td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount1" data-srno="1" readonly class="form-control input-sm order_item_final_amount" /></td>
                            <td></td>
                        </tr>
                    </table>
                    <div align="right">
                        <button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Total</td>
                <td align="right"><b><span id="final_total_amt"></span></b></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="hidden" name="total_item" id="total_item" value="1" />
                    <input type="submit" name="create_invoice" id="create_invoice" class="btn btn-info" value="Create" />
                </td>
            </tr>
        </table>
    </div>
</form>