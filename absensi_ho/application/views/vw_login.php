<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/login/template/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/template/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(<?= base_url(); ?>assets/login/template/images/4.jpg);">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('msg')) : ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?= $this->session->flashdata('msg'); ?>
                    </div>
                <?php endif; ?>
                
                <form class="login100-form validate-form" action="" method="POST">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" id="username" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" id="pass" name="pass" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<!-- <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label> -->
						</div>

						<div>
							<a href="<?= base_url();?>" class="txt1">
								Click me to Home
							</a>
						</div>
					</div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" onclick="login()">
                            Login
                        </button>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/template/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/template/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/template/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url(); ?>assets/login/template/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/template/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/template/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/login/template/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/template/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/template/js/main.js"></script>

    <!-- <script type="text/javascript">
        function login() {
            var username = $('#username').val();
            var pass = $('#pass').val();
            // alert(username+''+pass);
            $.ajax({
                url: '<?= base_url(); ?>login',
                type: 'POST',
                dataType: 'JSON',
                cache: false,
                data: {
                    'username': username,
                    'pass': pass
                },
                success : function (data){
                    setInterval('location.reload()', 100);
                },
                error: function(request){
                    console.log(request.responseText);
                }
            });
        }
    </script> -->

</body>

</html>