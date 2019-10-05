<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lorem ipsum</title>
	<link rel="shortcut icon" href="<?=base_url();?>assets/icon/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/mdi/css/materialdesignicons.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style.css">
	<style type="text/css">
		body {
			background-color: #3f4a51;
		}

		.wrp {
			max-width: 350px !important;
		}

		@media screen and (min-width: 768px) {
			body {
				background-image: url('../assets/img/lp.jpg');
				background-blend-mode: soft-light;
				background-repeat: no-repeat;
				-webkit-background-size: cover;
				background-size: cover;
			}

			.wrp {
				min-width: 350px !important;
				max-width: 350px !important;
			}
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row d-flex justify-content-center mt-5">
			<div class="col-md-4 wrp">
				<div class="card">
					<div class="card-body">
						<p class="text-center" style="font-size: 18px;">Daftar</p>
						<form action="lorem.php" method="post">
							<div class="input-group mb-3">
								<div class="input-group-prepend"><span class="input-group-text"><i class="mdi mdi-face d-inline-flex"></i></span></div>
								<input type="text" name="user" id="" class="form-control" placeholder="Username">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend"><span class="input-group-text"><i class="mdi mdi-lock d-inline-flex"></i></span></div>
								<input type="text" name="pass" id="" class="form-control" placeholder="Password">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend"><span class="input-group-text"><i class="mdi mdi-lock-reset d-inline-flex"></i></span></div>
								<input type="text" name="retype" id="" class="form-control" placeholder="Masukan ulang password">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="<?=base_url();?>assets/js/slim/jquery-slim.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>