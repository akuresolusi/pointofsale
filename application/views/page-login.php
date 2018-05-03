<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login &mdash; Point Of Sale</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<meta name="theme-color" content="#6bb9f0">
	<!-- <link rel="icon" sizes="192x192" href="assets/img/logo-q.png"> -->
	<style type="text/css">
		body{
			background: url(assets/img/login-back2.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
		}
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-2.png" alt="Logo" width="190" style="margin-bottom: 20px;"></div>
								<p class="lead">Silahkan masukan akun anda.</p>
							</div>
							<?php echo form_open(base_url().'welcome/proses_login'); ?>
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Nomor Handphone</label>
									<input type="text" class="form-control" name="nohp" id="nohp" placeholder="Nomor Handphone" autofocus="">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
								<div class="bottom">
									<p style="margin-top: 20px; text-align: center;">&copy; 2018 <a href="#"> - Akure Solusi.</a> All Rights Reserved.</p>
								</div>
							<?php echo form_close() ?>
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
</body>

</html>
