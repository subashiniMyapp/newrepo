<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    @include('basic-layouts.head')
    <!-- Title Page-->
    <title>My First Page</title>
</head>
<style>
    .top_rw {
        background-color: #f4f4f4;
    }

    .td_w {}

    button {
        padding: 5px 10px;
        font-size: 14px;
    }

    .invoice-box {
        max-width: 890px;
        margin: auto;
        padding: 10px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 14px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
        border-bottom: solid 1px #ccc;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: middle;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
        font-size: 12px;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }

    .custom {
        width: 75%;
        margin-left: auto;
    }

    .custom1 {
        width: 75%;
        margin-right: auto;
    }

    #order_date {
        width: 30%;
        margin-right: auto;
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
                        <div class="row">
                            <div class="invoice-box">
                                <table cellpadding="0" cellspacing="0">
                                    <tr class="top_rw">
                                        <td colspan="2">
                                            <h2 style="margin-bottom: 0px;"> Tax invoice/Bill of Supply</h2>
                                            <span>Order Date :</span><input type="text" name="order_date" id="order_date" class="form-control input-sm" readonly placeholder="Select Invoice Date" />
                                        </td>
                                        <td style="width:30%; margin-right: 10px;">
                                            Order Id: 6580083283
                                        </td>
                                    </tr>
                                    <tr class="top">
                                        <td colspan="3">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <b> Sold By : Suba Enterprises </b> <br>
                                                        No.54, Shanmugam Street,<br>
                                                        Manjakuppam, District Cuddalore, Pin Code :
                                                        607001 ,<br>
                                                        PAN: AALFN0535C <br>
                                                        GSTIN: 27AALFN0535C1ZK <br>
                                                    </td>
                                                    <td> <strong>Bank details</strong><br>
                                                        A/C.Name :Subashini <br>
                                                        A/C.Number : 123456789321455<br>
                                                        Bank Name : MyBank<br>
                                                        Branch : Mybranch<br>
                                                        IFSC Code : 12345
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr class="information">
                                        <td colspan="3">
                                            <table>
                                                <tr>
                                                    <td colspan="2">
                                                        <strong>Billing Address: </strong><input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-sm custom1" placeholder="Enter Receiver Name" /><br>
                                                        <textarea name="order_receiver_address" id="order_receiver_address" class="form-control custom1" placeholder="Enter Billing Address"></textarea>
                                                    </td>
                                                    <td> <strong> Shipping Address: </strong><br>
                                                        <textarea name="order_receiver_address" id="order_receiver_address" class="form-control custom" placeholder="Enter Shipping Address"></textarea>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <td colspan="3">
                                        <table cellspacing="0px" cellpadding="2px">
                                            <tr class="heading">
                                                <td style="width:25%;">
                                                    ITEM
                                                </td>
                                                <td style="width:10%; text-align:center;">
                                                    QTY.
                                                </td>
                                                <td style="width:10%; text-align:right;">
                                                    PRICE (INR)
                                                </td>
                                                <td style="width:15%; text-align:right;">
                                                    TAX RATE & TYPE
                                                </td>
                                                <td style="width:15%; text-align:right;">
                                                    TAX AMOUNT (INR)
                                                </td>
                                                <td style="width:15%; text-align:right;">
                                                    TOTAL AMOUNT (INR)
                                                </td>
                                            </tr>
                                            <tr class="item">
                                                <td style="width:25%;">
                                                    Johnson's Baby Skincare Wipes 80s
                                                    Pack Of 2 Rs. 60 Off
                                                    HSN Code :4818
                                                    novajj079
                                                </td>
                                                <td style="width:10%; text-align:center;">
                                                    2
                                                </td>
                                                <td style="width:10%; text-align:right;">
                                                    322.03
                                                </td>
                                                <td style="width:15%; text-align:right;">
                                                    18% IGST
                                                </td>
                                                <td style="width:15%; text-align:right;">
                                                    57.97
                                                </td>
                                                <td style="width:15%; text-align:right;">
                                                    380
                                                </td>
                                            </tr>
                                            <tr class="item">
                                                <td style="width:25%;"> <b> Grand Total </b> </td>
                                                <td style="width:10%; text-align:center;">
                                                    2
                                                </td>
                                                <td style="width:10%; text-align:right;">
                                                    322.03
                                                </td>
                                                <td style="width:15%; text-align:right;">
                                                </td>
                                                <td style="width:15%; text-align:right;">
                                                    57.97
                                                </td>
                                                <td style="width:15%; text-align:right;">
                                                    380
                                                </td>
                                            </tr>
                                    </td>
                                </table>
                                <tr class="total">
                                    <td colspan="3" align="right"> Total Amount in Words : <b> Three Hundred Eighty Rupees Only </b> </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <table cellspacing="0px" cellpadding="2px">
                                            <tr>
                                                <td width="50%">
                                                    <b> Declaration: </b> <br>
                                                    We declare that this invoice shows the actual price of the goods
                                                    described above and that all particulars are true and correct. The
                                                    goods sold are intended for end user consumption and not for resale.
                                                </td>
                                                <td>
                                                    * This is a computer generated invoice and does not
                                                    require a physical signature
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%">
                                                </td>
                                                <td>
                                                    <b> Authorized Signature </b>
                                                    <br>
                                                    <br>
                                                    ...................................
                                                    <br>
                                                    <br>
                                                    <br>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                </table>
                            </div>

                        </div>
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
<link href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('#order_date').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });
    });
</script>