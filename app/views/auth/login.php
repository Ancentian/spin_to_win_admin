<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>LOGIN</title>

    <link rel="shortcut icon" href="<?php echo base_url() ?>res/assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>res/assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>res/assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>res/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>res/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>res/assets/css/style.css">
</head>
<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" style="height: 100%" src="<?php echo base_url() ?>res/assets/img/spinwan.jpeg" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Welcome to Login</h1>
                            <?php if ($this->session->flashdata('success-msg')) { ?>
                                <div class="alert alert-success"><?php echo $this->session->flashdata('success-msg'); ?></div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error-msg')) { ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error-msg'); ?></div>
                            <?php } ?>
                            &nbsp;

                            <form action="<?php echo base_url('auth/login_post'); ?>" method="POST">
                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input class="form-control" name="email" type="text">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" name="password" type="text">
                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>
                                <div class="forgotpass" hidden>
                                    <div class="remember-me">
                                        <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                            <input type="checkbox" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <a href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>

                            <div class="login-or" hidden>
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>

                            <div class="social-login" hidden>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url() ?>res/assets/js/jquery-3.6.0.min.js"></script>

    <script src="<?php echo base_url() ?>res/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url() ?>res/assets/js/feather.min.js"></script>

    <script src="<?php echo base_url() ?>res/assets/js/script.js"></script>
</body>
</html>