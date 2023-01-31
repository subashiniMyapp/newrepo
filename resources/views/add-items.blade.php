<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->

    @include('basic-layouts.head')
    <!-- Title Page-->
    <title>My First Page</title>
</head>
<style>
    .dataTables_filter input {
        border-radius: 5px;
        box-shadow: none !important;
    }

    ul#save_msgList {
        margin: 8px 20px;
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
                            <h4 id='modelheading'></h4>
                            <button type="button" class="close" id='closebtn' data-dismiss=" modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul id="save_msgList"></ul>
                        <form action="" method="post" id='addForm'>

                            <input type="hidden" name="product_id" id="product_id">
                            <div class="modal-body mx-3">
                                <div class="md-form mb-4">
                                    <p class="mb-2">Enter item name</p>
                                    <input type="text" name="itemname" id="Itemname" class="form-control validate ">
                                    <span id='erroritem' class="text-danger"></span>
                                </div>
                                <div class="md-form mb-3">
                                    <p class="md-form mb-2">Enter item description (If any)</p>
                                    <input type="text" name="description" id="description" class="form-control validate">
                                </div>
                                <div class="md-form mb-3">
                                    <p class="md-form mb-2">Enter item uom</p>
                                    <input type="text" name="uom" id="Itemuom" class="form-control validate">
                                    <span id='erroruom' class="text-danger"></span>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button class="btn btn-info" id='form-reset'>Reset</button>
                                <button class="btn btn-success" name='submit' id='saveBtn' type="submit">Save</button>
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
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="createNewItem" data-toggle="modal" data-target="#modalLoginForm">
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
                                            <tbody id="mytable">

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
            },
            processing: true,
            serverSide: true,
            ajax: "{{ route ('AddItem') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'itemname',
                    name: 'itemname'
                },
                {
                    data: 'uom',
                    name: 'uom'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true,

                },
            ],


        });

        // show popup model
        $('#createNewItem').click(function() {
            $('#saveBtn').val("create-product");
            $('#product_id').val('');
            $('#addForm').trigger("reset");
            $('#modelheading').text("Create New Item");
            //$('#ajaxModel').modal('show');
        });
        // hide popup model
        $('#closebtn').on('click', function() {
            //alert('reset');
            $('#addForm')[0].reset();
            $("#modalLoginForm").modal("hide");
            $('#save_msgList').html("");
            $('#save_msgList').removeClass('alert alert-danger');
            //e.preventDefault();
        });

        // reset popup model
        $('#form-reset').on('click', function(e) {
            //alert('reset');
            $('#addForm')[0].reset();
            $('#save_msgList').html("");
            $('#save_msgList').removeClass('alert alert-danger');
            //$("#modalLoginForm").modal("hide");
            e.preventDefault();
        });

        $("#addForm").submit(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var data = $(this).serialize();
            //console.log(data);
            var action_url = '';
            if ($('#saveBtn').val() == "create-product") {
                action_url = "{{ route('SaveItem') }}";
            }
            if ($('#saveBtn').val() == "update-product") {
                action_url = "{{ route('UpdateItem') }}";
            }
            $.ajax({
                data: data,
                url: action_url,
                type: "POST",
                //dataType: 'json',
                success: function(response) {
                    //alert(data);
                    //console.log(response);
                    var msghtml = "";
                    if (response.status == 400) {
                        //console.log(data.errors);save_msgList
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#save_msgList').append('<li>' + err_value + '</li>');
                        });
                        $("#modalLoginForm").modal("show");
                    } else if (response.status == 200) {
                        $('#addForm')[0].reset();
                        $('#save_msgList').html("");
                        $('#save_msgList').removeClass('alert alert-danger');
                        $("#modalLoginForm").modal("hide");
                        $('.itemtable').DataTable().ajax.reload();
                        Swal.fire(
                            'Good job!',
                            response.success,
                            'success'
                        )

                    }

                }
            });
        });

        // Edit popup function
        $(document).on('click', '.edit', function() {
            var item_id = $(this).attr('id');
            //console.log(id);
            $.ajax({
                type: "GET",
                url: "/showData/" + item_id,
                dataType: "json",
                success: function(response) {
                    //console.log(response);
                    if (response.status == 200) {
                        $('#Itemname').val(response.result.itemname);
                        $('#description').val(response.result.description);
                        $('#Itemuom').val(response.result.uom);
                        $('#product_id').val(item_id);
                        $('#modelheading').text('Edit Item Name');
                        $('#saveBtn').val('update-product');
                        $('#modalLoginForm').modal('show');
                    }
                }
            })

        });

        // delete alert/////////////////////////////////////
        var user_id = '';
        $(document).on('click', '.delete', function() {
            user_id = $(this).attr('id');
            Swal.fire({
                title: 'Do you want to delete this item?',
                showDenyButton: true,
                //showCancelButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: `No`,
            }).then((result) => {

                if (result.isConfirmed) {
                    $.ajax({
                        url: "DeleteItem/" + user_id,
                        success: function(response) {
                            //console.log(response);
                            if (response.status == 200) {
                                $('.itemtable').DataTable().ajax.reload();
                                Swal.fire(response.message, 'success')
                            }
                        }
                    })
                } else if (result.isDenied) {
                    Swal.fire('Your Itemname Saved', 'info')
                }
            })
        });

    });
</script>