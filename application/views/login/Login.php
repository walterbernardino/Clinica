<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema clinica</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/login/css/main.css">
    
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url('public/login/images/bg-01.jpg');">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>

				<form class="login100-form validate-form form-login">
					<div class="wrap-input100 validate-input m-b-26" data-validate="E-mail necessario">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="text" name="email" placeholder="E-mail de acesso">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Senha necessaria">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="pass" placeholder="senha de acesso">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
                                Lembre de mim
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Esqueci minha senha
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>public/login/vendor/jquery/jquery-3.2.1.min.js"></script>

<!--	<script src="--><?php //echo base_url(); ?><!--public/login/js/notify.js"></script>-->
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>public/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>public/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>public/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>public/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>public/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>public/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>public/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>public/login/js/main.js"></script>

	<script src="<?php echo base_url(); ?>public/login/js/notify.js"></script>


<!--	script login -->
	<script>

		let formLogin = document.querySelector(".form-login");

		formLogin.addEventListener("submit", e => {
			e.preventDefault();
			fetch("./login", {
				method: "POST",
				body: new FormData(formLogin)
			})
			.then(response => response.json())
			.then(response => {
				if (response.sucess) {
					$.notify(response.sucess, 'success');
					window.location.href= "./admin"
				} else if (response.error) {
					$.notify(response.error, 'error');
				}


			})

		})

	</script>
</body>
</html>
