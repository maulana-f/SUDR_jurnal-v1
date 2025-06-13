<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - SIM Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>favicon.jpeg">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/styles.css">
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="<?php echo base_url() ?>welcome/auth">
                    <div class="login-form-head">
                        <h4>SELAMAT DATANG</h4>
                        <p>Sistem Informasi Perpustakaan</p>
                    </div>

                    <div class="login-form-body">
                        <div class="form-gp">
                            <label>Username</label>
                            <input type="text" name="username" required><i class="ti-user"></i><div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label>Password</label>
                            <input type="password" name="password" required><i class="ti-lock"></i><div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Masuk <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url();?>assets/login/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url();?>assets/login/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/login/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/login/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/login/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/login/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="<?php echo base_url();?>assets/login/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/login/js/scripts.js"></script>
</body>

</html>