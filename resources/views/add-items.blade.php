<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->

    @include('basic-layouts.head')
    <!-- Title Page-->
    <title>My First Page</title>
</head>
<style>
    /* TWO */
    .custom-field.two input {
        border-radius: 0;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        background:
            linear-gradient(90deg, #222, #222) center bottom/0 0.15em no-repeat,
            linear-gradient(90deg, #ccc, #ccc) left bottom/100% 0.15em no-repeat,
            linear-gradient(90deg, #fafafa, #fafafa) left bottom/100% no-repeat;
        transition: background-size 0.3s ease;
    }

    .custom-field.two input.dirty,
    .custom-field.two input:not(:placeholder-shown),
    .custom-field.two input:focus {
        background-size: 100% 0.15em, 100% 0.1em, 100%;
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
            <!-- ADD POPBOX -->
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <button type="button" class="close" id='closebtn' data-dismiss=" modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post" id='addForm'>
                            <div class="modal-body mx-3">
                                <div class="md-form mb-4">
                                    <p class="mb-2">Enter item name</p>
                                    <input type="text" id="defaultForm-email" class="form-control validate ">
                                </div>
                                <div class="md-form mb-3">
                                    <p class="md-form mb-2">Enter item description (If any)</p>
                                    <input type="text" id="defaultForm-pass" class="form-control validate">
                                </div>
                                <div class="md-form mb-3">
                                    <p class="md-form mb-2">Enter item uom</p>
                                    <input type="text" id="defaultForm-pass" class="form-control validate">
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button class="btn btn-info" id='form-reset'>Reset</button>
                                <button class="btn btn-success" name='submit' type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="top-campaign">
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-left">
                                            <div class="rs-select2--light rs-select2--md">
                                                <h3 class="title-5">Items list</h3>
                                            </div>
                                        </div>
                                        <div class="table-data__tool-right">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalLoginForm">
                                                <i class="zmdi zmdi-plus"></i>add item</button>
                                        </div>
                                    </div>

                                    <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3 itemtable">
                                            <thead>
                                                <tr>
                                                    <th>Sr.no</th>
                                                    <th>Item name</th>
                                                    <th>Unit of mesure(UOM)</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Mobile</td>
                                                    <td>iPhone X 64Gb Grey</td>
                                                    <td class="process">Processed</td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td>Mobile</td>
                                                    <td>Samsung S8 Black</td>
                                                    <td class="process">Processed</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Game</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="denied">Denied</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END DATA TABLE-->
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

<script>
    $(document).ready(function() {
        $('.itemtable').DataTable({
            info: false,
            //pagingType: 'simple',
            pagingType: 'full',
            language: {
                paginate: {
                    first: '<<',
                    previous: "<",
                    next: ">",
                    last: '>>'
                },
                aria: {
                    paginate: {
                        first: 'First',
                        previous: 'Previous',
                        next: 'Next',
                        last: 'Last'
                    }
                }
            }
        });
        // hide popup model
        $('#closebtn').on('click', function() {
            //alert('reset');
            $('#addForm')[0].reset();
            $("#modalLoginForm").modal("hide");
            //e.preventDefault();
        });

        // reset popup model
        $('#form-reset').on('click', function(e) {
            //alert('reset');
            $('#addForm')[0].reset();
            //$("#modalLoginForm").modal("hide");
            e.preventDefault();
        });
    });
</script>