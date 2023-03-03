<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->

    @include('basic-layouts.head')
    <!-- Title Page-->
    <title>My First Page</title>
</head>

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
                <div class="page-wrapper">
                    <div class="page-content--bge5">
                        <div class="container">
                            <div class="login-wrap">
                                <div class="login-content">
                                    <div class="login-logo">
                                        <a href="#">
                                            <img src="images/icon/logo.png" alt="CoolAdmin">
                                        </a>
                                    </div>
                                    <div class="login-form">
                                        <form action="{{route('changepassword')}}" method="post">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input class="au-input au-input--full" type="text" name="oldpass" placeholder="Enter old password">
                                                @error('oldpass')
                                                <div class="text-red-500">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input class="au-input au-input--full" type="text" name="newpass" placeholder="Enter new password">
                                                @error('newpass')
                                                <div class="text-red-500">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm password</label>
                                                <input class="au-input au-input--full" type="text" name="confirmpass" placeholder="Enter confirm password">
                                                @error('confirmpass')
                                                <div class="text-red-500">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    @include('basic-layouts.footer-script')

</body>

</html>
<!-- end document-->