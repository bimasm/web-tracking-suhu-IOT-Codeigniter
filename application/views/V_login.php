<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		Tracking
	</title>
	<!-- Favicon -->
	<link href="<?php echo base_url();?>assets/img/brand/favicon.png" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="<?php echo base_url();?>assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="<?php echo base_url();?>assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="bg-default">
	<div class="main-content">

		<!-- Header -->
		<div class="header bg-gradient-primary py-7 py-lg-8">
			<div class="container">
				<!-- <div class="header-body text-center mb-7"> -->
					<div class="row justify-content-center text-center">
						<div class="col-lg-5 col-md-6">
							<h1 class="text-white">Welcome!</h1>
							<p class="text-lead text-light">Fill this form!</p>
						</div>
					</div>
					<!-- 	</div> -->
				</div>
				<div class="separator separator-bottom separator-skew zindex-100">
					<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
						<polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
					</svg>
				</div>
			</div>
			<!-- Page content -->
			<div class="container mt--8 pb-5">
				<div class="row justify-content-center">
					<div class="col-lg-5 col-md-7">
						<div class="card bg-secondary shadow border-0">
<!-- 						<div class="card-header bg-transparent pb-5">
							<div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
							<div class="btn-wrapper text-center">
								<a href="#" class="btn btn-neutral btn-icon">
									<span class="btn-inner--icon"><img src="<?php //echo base_url();?>assets/img/icons/common/github.svg"></span>
									<span class="btn-inner--text">Github</span>
								</a>
								<a href="#" class="btn btn-neutral btn-icon">
									<span class="btn-inner--icon"><img src="<?php //echo base_url();?>assets/img/icons/common/google.svg"></span>
									<span class="btn-inner--text">Google</span>
								</a>
							</div>
						</div> -->
						<div class="card-body px-lg-5 py-lg-5">
							<div class="text-center text-muted mb-4">
								<small>Log in </small>
							</div>
							<form role="form">
								<div class="form-group mb-3">
									<div class="input-group input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-email-83"></i></span>
										</div>
										<input class="form-control" placeholder="Username" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
										</div>
										<input class="form-control" placeholder="Password" type="password">
									</div>
								</div>
								<div class="custom-control custom-control-alternative custom-checkbox">
									<input class="custom-control-input" id=" customCheckLogin" type="checkbox">
									<label class="custom-control-label" for=" customCheckLogin">
										<span class="text-muted">Remember me</span>
									</label>
								</div>
								<div class="text-center">
									<a href="<?php echo base_url(); ?>Channels"><button type="button" class="btn btn-primary my-4">Log in</button></a>
								</div>
							</form>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<a href="#" class="text-light"><small>Forgot password?</small></a>
						</div>
						<div class="col-6 text-right">
							<a href="#" class="text-light"><small>Create new account</small></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="py-5">
			<div class="container">
				<div class="row align-items-center justify-content-xl-between">
					<div class="col-xl-6">
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!--   Core   -->
	<script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
	<script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!--   Optional JS   -->
	<!--   Argon JS   -->
	<script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
	<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
	<script>
		window.TrackJS &&
		TrackJS.install({
			token: "ee6fab19c5a04ac1a32a645abde4613a",
			application: "argon-dashboard-free"
		});
	</script>
</body>

</html>