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

    .hideme {
        display: none;
        visibility: hidden;
    }

    .showme {
        display: inline;
        visibility: visible;
        /* display: block; */
        width: 50px;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
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
                                                        ADMIN ADDRESS,<br>
                                                        <h5>No.71, Shanmugam Street ,</h5>
                                                        <h5>Manjakuppam ,</h5>
                                                        <h5>Cuddalore - 607001 .</h5>
                                                        <h5>Contact : 7598395792 ,</h5>
                                                        <h5>e-Mail : admin007@gmail.com ,</h5>
                                                        <h5><strong>GSTIN : 33ASUPV122H1ZK.</strong></h5>
                                                    </address>
                                                </div>
                                                <div class="col-md-5">
                                                    Invoice Details : <br>
                                                    <h5>Invoice No : <span style="margin-left : 70px;">{{01}}</span></h5>
                                                    <h5>Invoice Date : <input type="text" name="" id="order_date" class="customstyle" style="margin-left : 50px;"> </h5>
                                                    <h5>Buyer's Order no : <input type="text" name="" id="" class="customstyle" style="margin-left : 19px;"></h5>
                                                    <h5>Buyer's Order Date :<input type="text" name="" id="buyer_date" class="customstyle" style="margin-left : 5px;"></h5>
                                                    <h5>Mode of payment :
                                                        <select name="" id="" class="customstyle" style="margin-left : 11px;">
                                                            <option value="cash">Cash</option>
                                                            <option value="bank">Bank transfer</option>
                                                            <option value="online">online</option>
                                                        </select>
                                                    </h5>
                                                    <!-- <h5>Delivery Note :<input type="text" name="" id="" class="customstyle" style="margin-left : 46px;"></h5> -->
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <address>
                                                        Billing Address ,<br />
                                                        <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-sm" style="width:80% ;" placeholder="Enter Receiver Name" />
                                                        <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" style="margin-top: 5px; width:80%" placeholder="Enter Billing Address"></textarea>
                                                    </address>
                                                </div>
                                                <div class="col-md-2">
                                                </div>
                                                <div class="col-md-4">
                                                    <address>
                                                        Shopping Address ,</strong> <br />
                                                        <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" placeholder="Enter Shopping Address"></textarea>
                                                    </address>
                                                </div>
                                            </div>
                                            <hr>
                                            <table id="invoice-item-table" class="table table-bordered">
                                                <tr>
                                                    <th width="5%">Sr No.</th>
                                                    <th width="25%">Item Name</th>
                                                    <th width="15%">HSN/SAC</th>
                                                    <th width="5%">Quantity</th>
                                                    <th width="15%">UOM</th>
                                                    <th width="15%">Price</th>
                                                    <th width="2%">Discount (%)</th>
                                                    <th width="12%">Total</th>
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
                                                    <td><input type="text" name="item_quantity[]" id="item_qty1" data-srno="1" class="form-control input-sm item_quantity" /></td>
                                                    <td><input type="text" name="item_uom[]" id="item_uom1" data-srno="1" class="form-control input-sm item_uom" /></td>
                                                    <td><input type="text" name="item_price[]" id="item_price1" data-srno="1" class="form-control input-sm item_amount" /></td>
                                                    <td><input type="text" name="item_discount_amount[]" id="item_discount1" data-srno="1" class="form-control input-sm item_discount" /></td>
                                                    <td><input type="text" name="item_final_amount[]" id="item_final_amount1" data-srno="1" readonly class="form-control input-sm item_final_amount" /></td>
                                                    <td><button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs mt-2">+</button></td>
                                                </tr>
                                            </table>
                                            <!-- <div class="text-right">
                                                <button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs mt-2">+</button>
                                            </div> -->
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="d-flex justify-content-end">
                                            <table style="margin-right:5rem;">
                                                <tr class="">
                                                    <td class="">Subtotal (Rs.) </td>
                                                    <td id="final_subtotal">100.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td class="inputshow">CGST (%)</td>
                                                    <td id="cgst_tax" contentEditable="true">10</td>
                                                </tr>
                                                <tr class="">
                                                    <td class="inputshow">SGST (%)</td>
                                                    <td id="sgst_tax" contentEditable="true">8</td>
                                                </tr>
                                                <tr class="">
                                                    <td class="inputshow">IGST (%)</td>
                                                    <td id="igst_tax" contentEditable="true">6</td>
                                                </tr>
                                                <tr class="">
                                                    <td>NetTotal</td>
                                                    <td id="final_nettotal_amount">$107.00</td>
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
                                            <input type="submit" name="create_invoice" id="create_invoice" class="btn btn-info" value="Cancel" />
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
        //var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        // $.ajax({
        //     url: "{{route('GetItems')}}",
        //     type: 'get',
        //     dataType: 'html',
        //     success: function(response) {
        //         console.log(response);
        //         $('select["name=itemname[]"]').html(response);
        //     }
        // });

        // datepicker 1
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

        //var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('.items_names').select2({

        });

        const final_sub_total = $('#final_subtotal').text();
        var count = 1;

        $(document).on('click', '#add_row', function() {
            count++;
            $("#total_item").val(count);
            var html_code = '';
            html_code += '<tr id="row_id_' + count + '">';
            html_code += '<td><span id="sr_no">' + count + '</span></td>';
            html_code += '<td><select name = "itemname[]"  id="selectitem' + count + '" data-srno = "' + count + '" class="form-control items_names"> <option value="" selected disabled>Select Item Name</option> @foreach($users as $user)<option value="{{$user->id}}">{{$user->itemname}}</option>@endforeach</select>';
            html_code += '<td><input type="text" name="item_hsn_sac[]" id="hsn_sca_number' + count + '" data-srno="' + count + '" class="form-control input-sm" /></td>';
            html_code += '<td><input type="text" name="item_quantity[]" id="item_qty' + count + '" data-srno="' + count + '" class="form-control input-sm item_quantity" /></td>';
            html_code += '<td><input type="text" name="item_uom[]" id="item_uom' + count + '" data-srno="' + count + '" class="form-control input-sm item_uom" /></td>';
            html_code += '<td><input type="text" name="item_price[]" id="item_price' + count + '" data-srno="' + count + '" class="form-control input-sm item_amount" /></td>';
            html_code += '<td><input type="text" name="item_discount_amount[]" id="item_discount' + count + '" data-srno="' + count + '" class="form-control input-sm item_discount" /></td>';
            html_code += '<td><input type="text" name="item_final_amount[]" id="item_final_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm item_final_amount"/></td>';
            html_code += '<td><button type="button" name="remove_row" id="' + count + '" class="btn btn-danger btn-xs remove_row">X</button></td>';
            html_code += '</tr>';
            $('#invoice-item-table').append(html_code);

            $('.items_names').select2({
                placeholder: 'Select an item',
            });

            // $.ajax({
            //     url: "{{route('GetItems')}}",
            //     type: 'get',
            //     dataType: 'html',
            //     success: function(response) {
            //         //console.log(response);
            //         $('select["name=itemname[]"]').html(response);
            //     }
            // });
        });
        $(document).on('click', '.remove_row', function() {
            $(this).closest('tr').remove();
        });




    });
</script>