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
                                                            <option>Cash</option>
                                                            <option>Card</option>
                                                        </select>
                                                    </h5>
                                                    <h5>Delivery Note :<input type="text" name="" id="" class="customstyle" style="margin-left : 46px;"></h5>
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
                                                    <th width="10%">Price</th>
                                                    <th width="3%">Discount (%)</th>
                                                    <th width="12%">Total</th>
                                                    <th width="2%" rowspan="2"></th>
                                                </tr>
                                                <tr>
                                                    <td><span id="sr_no">1</span></td>
                                                    <td>
                                                        <select name="itemname" id="selectitem" class="form-control">
                                                        </select>
                                                    </td>
                                                    <td><input type="text" name="hsn_sac[]" id="hsn_sca_number1" data-srno="1" class="form-control input-sm" /></td>
                                                    <td><input type="text" name="quantity[]" id="item_qty1" data-srno="1" class="form-control input-sm quantity" /></td>
                                                    <td><input type="text" name="uom[]" id="order_item_final_amount1" data-srno="1" class="form-control input-sm order_item_final_amount" /></td>
                                                    <td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount1" data-srno="1" class="form-control input-sm order_item_final_amount" /></td>
                                                    <td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount1" data-srno="1" class="form-control input-sm order_item_final_amount" /></td>
                                                    <td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount1" data-srno="1" readonly class="form-control input-sm order_item_final_amount" /></td>
                                                </tr>
                                            </table>
                                            <div class="text-right">
                                                <button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs mt-2">+</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><b>Total</td>
                                        <td class="text-right"><b><span id="final_total_amt"></span></b></td>
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
    $(document).ready(function() {
        $('#order_date').datepicker({
            format: "dd-mm-yyyy",
            autoclose: true,

            showDropdowns: true,
        });
        $('#buyer_date').datepicker({
            format: "dd-mm-yyyy",
            autoclose: true,
            showDropdowns: true,
        });
        // fetch item name 
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $("#selectitem").select2({
            placeholder: 'Select an item',
            ajax: {
                url: "{{route('GetItems')}}",
                type: 'get',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            // console.log(item);
                            return {
                                id: item.id,
                                text: item.itemname

                            }
                        })
                    };
                },
                cache: false
            },

        });



    });
</script>