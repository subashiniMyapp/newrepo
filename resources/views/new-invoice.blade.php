<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    @include('basic-layouts.head')
    <!-- Title Page-->
    <title>My First Page</title>
</head>
<style>
    .customstyle {
        width: 40%;
        padding: 0.375rem 0.75rem;
        border: 1px solid #ced4da;
        border-radius: 2px;
    }

    .select2-container {
        min-width: 12em !important;

    }

    .borderless td {
        border: none;
    }
</style>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            @include('basic-layouts.mobile-head')
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            @include('basic-layouts.sidebar')
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                @include('basic-layouts.header')
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="" method="post" id="invoice_form">
                            <div class="table-responsive">
                                <h3 class="title-3 m-b-30">Create Invoice</h3>
                                <hr>
                                <table class="table table-bordered">
                                    <tr>
                                        <td colspan="2">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <address>
                                                        <h4> ADMIN ADDRESS :</h4>
                                                        No.71, Shanmugam Street ,<br>
                                                        Manjakuppam ,<br>
                                                        Cuddalore - 607001 ,<br>
                                                        Contact : 7598395792 ,<br>
                                                        e-Mail : admin007@gmail.com ,<br>
                                                        GSTIN : 33ASUPV122H1ZK.
                                                    </address>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>Invoice Details : </h4>
                                                    Invoice No : <span style="margin-left : 70px;">{{01}}</span><br>
                                                    Invoice Date : <input type="text" name="" id="order_date" class="customstyle" style="margin-left : 50px;"> <br>
                                                    Buyer's Order no : <input type="text" name="" id="" class="customstyle" style="margin-left : 19px;"><br>
                                                    Buyer's Order Date :<input type="text" name="" id="buyer_date" class="customstyle" style="margin-left : 5px;"><br>
                                                    Mode of payment :
                                                    <select name="" id="" class="customstyle" style="margin-left : 6px;">
                                                        <option value="cash">Cash</option>
                                                        <option value="bank">Bank transfer</option>
                                                        <option value="online">online</option>
                                                    </select>
                                                    <br>
                                                    <!-- <h5>Delivery Note :<input type="text" name="" id="" class="customstyle" style="margin-left : 46px;"></h5> -->
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <address>
                                                        <h4>Billing Address ,</h4>
                                                        <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-sm" style="width:80% ; border:none" placeholder="Enter Receiver Name" />
                                                        <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" style="margin-top: 5px; width:80%; border:none" placeholder="Enter Billing Address"></textarea>
                                                    </address>
                                                </div>
                                                <div class="col-md-2">
                                                </div>
                                                <div class="col-md-4">
                                                    <address>
                                                        <h4>Shopping Address ,</h4>
                                                        <textarea name="order_receiver_address" id="order_receiver_address" style="border:none" class="form-control" placeholder="Enter Shopping Address"></textarea>
                                                    </address>
                                                </div>
                                            </div>
                                            <hr>
                                            <table id="invoice-item-table" class="table table-borderless">
                                                <tr>
                                                    <th width="5%">Sr No.</th>
                                                    <th width="25%">Item Name</th>
                                                    <th width="15%">HSN/SAC</th>
                                                    <th width="5%">Quantity</th>
                                                    <th width="15%">UOM</th>
                                                    <th width="15%">Price</th>
                                                    <!-- <th width="2%">Discount (%)</th> -->
                                                    <th width="15%">Total</th>
                                                </tr>
                                                <tr>

                                                    <td><span id="sr_no">1</span></td>
                                                    <td>
                                                        <select name="itemname[]" id="selectitem1" data-srno="1" class="form-control items_names">
                                                            <option value="" selected disabled>Select Item Name</option>
                                                            @foreach($users as $user)
                                                            <option value="{{$user->id}}">{{$user->itemname}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td><input type="text" name="item_hsn_sac[]" id="hsn_sca_number1" data-srno="1" class="form-control input-sm" /></td>
                                                    <td><input type="text" name="item_quantity[]" id="item_qty1" data-srno="1" class="number_only form-control input-sm item_quantity" /></td>
                                                    <td><input type="text" name="item_uom[]" id="item_uom1" data-srno="1" class="form-control input-sm item_uom" /></td>
                                                    <td><input type="text" name="item_price[]" id="item_price1" data-srno="1" class="form-control input-sm item_amount" /></td>
                                                    <!-- <td><input type="text" name="item_discount_amount[]" id="item_discount1" data-srno="1" class="form-control input-sm item_discount" /></td> -->
                                                    <td><input type="text" name="item_final_amount[]" id="item_final_amount1" data-srno="1" readonly class="form-control input-sm item_final_amount" /></td>
                                                    <td><button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs mt-2" data-toggle="tooltip" data-placement="top" title="add"><i class="zmdi zmdi-plus"></i></button></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="d-flex justify-content-end">
                                            <table style="margin-right:5rem;">
                                                <tr>
                                                    <td class="">Subtotal (Rs.) </td>
                                                    <td id="final_subtotal"></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="inputshow">CGST(%)</td>
                                                    <td id="cgst_tax" class="tax" contentEditable="true" style="width:50% ;"></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="inputshow">SGST (%)</td>
                                                    <td id="sgst_tax" class="tax" contentEditable="true" style="width:50% ;"></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="inputshow">IGST (%)</td>
                                                    <td id="igst_tax" class="tax" contentEditable="true" style="width:50% ;"></td>
                                                </tr>
                                                <tr class="">
                                                    <td>NetTotal (Rs.)</td>
                                                    <td id="final_nettotal_amount"></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            <input type="hidden" name="total_item" id="total_item" value="1" />
                                            <input type="submit" name="" id="create_invoice" class="btn btn-info" value="Cancel" />
                                            <input type="submit" name="create_invoice" id="create_invoice" class="btn btn-success" value="Create" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2022 Me. All rights reserved. <a href="#">####</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    @include('basic-layouts.footer-script')

</body>

</html>
<!-- end document-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- select-2 pulgin -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // show and hide tax fields
    $(document).ready(function() {
        // datepicker 1
        var taxArray = [];
        $('#order_date').datepicker({
            format: "dd-mm-yyyy",
            autoclose: true,
            showDropdowns: true,
        });
        // datepicker 2
        $('#buyer_date').datepicker({
            format: "dd-mm-yyyy",
            autoclose: true,
            showDropdowns: true,
        });
        // disable fields/////////////////////////////
        $("#final_subtotal", "#final_nettotal_amount").attr("readOnly", "true");


        // select2 pulgin//////////////////////
        $('.items_names').select2({});
        const final_sub_total = $('#final_subtotal').text();
        var count = 1;
        var $totalItemAmount = 0;

        // Add new rows //////////////////////
        $(document).on('click', '#add_row', function() {
            count++;
            $("#total_item").val(count);
            var html_code = '';
            html_code += '<tr id="row_id_' + count + '">';
            html_code += '<td><span id="sr_no">' + count + '</span></td>';
            html_code += '<td><select name = "itemname[]"  id="selectitem' + count + '" data-srno = "' + count + '" class="form-control items_names"> <option value="" selected disabled>Select Item Name</option> @foreach($users as $user)<option value="{{$user->id}}">{{$user->itemname}}</option>@endforeach</select>';
            html_code += '<td><input type="text" name="item_hsn_sac[]" id="hsn_sca_number' + count + '" data-srno="' + count + '" class="form-control input-sm" /></td>';
            html_code += '<td><input type="text" name="item_quantity[]" id="item_qty' + count + '" data-srno="' + count + '" class="number_only form-control input-sm item_quantity " /></td>';
            html_code += '<td><input type="text" name="item_uom[]" id="item_uom' + count + '" data-srno="' + count + '" class="form-control input-sm item_uom" /></td>';
            html_code += '<td><input type="text" name="item_price[]" id="item_price' + count + '" data-srno="' + count + '" class="form-control input-sm item_amount " /></td>';
            // html_code += '<td><input type="text" name="item_discount_amount[]" id="item_discount' + count + '" data-srno="' + count + '" class="form-control input-sm item_discount " /></td>';
            html_code += '<td><input type="text" name="item_final_amount[]" id="item_final_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm item_final_amount"/></td>';
            html_code += '<td><button type="button" name="remove_row" id="' + count + '" class="btn btn-danger btn-xs remove_row" data-toggle="tooltip" data-placement="top" title="delete"> <i class="zmdi zmdi-delete"></i></button></td>';
            html_code += '</tr>';
            $('#invoice-item-table').append(html_code);

            $('.items_names').select2({
                placeholder: 'Select an item',
            });
        });
        $(document).on('click', '.remove_row', function() {
            var row_id = $(this).attr("id");
            var total_item_amount = $('#item_final_amount' + row_id).val();
            var net_amount = $('#final_nettotal_amount').text();
            var final_net_amount = parseFloat(net_amount) - parseFloat(total_item_amount);
            $('#final_nettotal_amount').text(final_net_amount);
            $('#final_subtotal').text(final_net_amount);
            $('#row_id_' + row_id).remove();
            count--;
            $('#total_item').val(count);
        });

        function cal_final_total(count) {
            var final_item_total = 0;

            for (j = 1; j <= count; j++) {
                //console.log(j);
                var quantity = 0;
                var price = 0;
                var actual_amount = 0;
                var item_total = 0;
                var tax1 = 0;
                var tax2 = 0;
                var tax3 = 0;
                quantity = $('#item_qty' + j).val();
                if (quantity > 0) {
                    price = $('#item_price' + j).val();
                    if (price > 0) {
                        actual_amount = parseFloat(quantity) * parseFloat(price);
                        //console.log(actual_amount);
                        $('#item_final_amount' + j).val(actual_amount);
                        final_item_total = parseFloat(final_item_total) + parseFloat(actual_amount);
                        $('#final_subtotal').text(final_item_total);

                        //var taxRates = [];
                        // $('.tax').blur(function() {
                        //     var inputValue = $(this).text();
                        //     //console.log(inputValue1);
                        //     taxRates.push(inputValue);
                        //     //console.log(taxRates);
                        //     totalItemAmount = $('#final_subtotal').text();

                        //     var totalTaxAmount = 0;
                        //     var netAmount = 0;
                        //     $.each(taxRates, function(index, value) {
                        //         totalTaxAmount += (totalItemAmount * value) / 100;
                        //         //console.log(totalTaxAmount);
                        //     });
                        //     var netAmount = parseFloat(totalItemAmount) + parseFloat(totalTaxAmount);
                        //     //console.log(netAmount);
                        //     $('#final_nettotal_amount').text(netAmount);
                        // });
                    }
                }
            }

        }

        // function cal_final_total(count) {
        //     var final_item_total = 0;
        //     for (j = 1; j <= count; j++) {
        //         var quantity = 0;
        //         var price = 0;
        //         var actual_amount = 0;
        //         var tax1_rate = 0;
        //         var tax1_amount = 0;
        //         var tax2_rate = 0;
        //         var tax2_amount = 0;
        //         var tax3_rate = 0;
        //         var tax3_amount = 0;
        //         var item_total = 0;
        //         quantity = $('#order_item_quantity' + j).val();
        //         if (quantity > 0) {
        //             price = $('#order_item_price' + j).val();
        //             if (price > 0) {
        //                 actual_amount = parseFloat(quantity) * parseFloat(price);
        //                 $('#order_item_actual_amount' + j).val(actual_amount);
        //                 tax1_rate = $('#order_item_tax1_rate' + j).val();
        //                 if (tax1_rate > 0) {
        //                     tax1_amount = parseFloat(actual_amount) * parseFloat(tax1_rate) / 100;
        //                     $('#order_item_tax1_amount' + j).val(tax1_amount);
        //                 }
        //                 tax2_rate = $('#order_item_tax2_rate' + j).val();
        //                 if (tax2_rate > 0) {
        //                     tax2_amount = parseFloat(actual_amount) * parseFloat(tax2_rate) / 100;
        //                     $('#order_item_tax2_amount' + j).val(tax2_amount);
        //                 }
        //                 tax3_rate = $('#order_item_tax3_rate' + j).val();
        //                 if (tax3_rate > 0) {
        //                     tax3_amount = parseFloat(actual_amount) * parseFloat(tax3_rate) / 100;
        //                     $('#order_item_tax3_amount' + j).val(tax3_amount);
        //                 }
        //                 item_total = parseFloat(actual_amount) + parseFloat(tax1_amount) + parseFloat(tax2_amount) + parseFloat(tax3_amount);
        //                 final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
        //                 $('#order_item_final_amount' + j).val(item_total);
        //             }
        //         }
        //     }
        //     $('#final_total_amt').text(final_item_total);
        // }


        $(document).on('blur', '.item_amount', function() {
            cal_final_total(count);

            // $totalItemAmount = $('#final_nettotal_amount').text(final_item_total);
            // calculateNetAmount($totalItemAmount,);
        });


        $(document).on('submit', '#invoice_form', function(e) {
            e.preventDefault();
            //alert('hi');
            if ($.trim($('#order_receiver_name').val()).length == 0) {
                Swal.fire(
                    'Field required',
                    'Please Enter Recevier Name',
                    'info'
                )

                return false;

            }
            for (var no = 1; no <= count; no++) {
                if ($.trim($('#selectitem' + no).val()).length == 0) {
                    //console.log(no);
                    Swal.fire(
                        'Field required',
                        'Please Select Item Name',
                        'info'
                    )
                    $('#selectitem' + no).focus();
                    return false;
                }

                if ($.trim($('#item_qty' + no).val()).length == 0) {
                    Swal.fire(
                        'Field required',
                        'Please Enter Item Quantity',
                        'info'
                    )
                    $('#item_qty' + no).focus();
                    return false;
                }

                if ($.trim($('#item_price' + no).val()).length == 0) {
                    Swal.fire(
                        'Field required',
                        'Please Enter Item Price',
                        'info'
                    )
                    $('#item_price' + no).focus();
                    return false;
                }

            }
        });
    });
</script>