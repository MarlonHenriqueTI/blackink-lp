<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Seu Orçamento</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo-blackink.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');background-attachment: fixed;"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
        <form action="http://dropink.art.br/admin/cadastrar-orcamento-lp-cliente.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
				
					<img src="images/logo-blackink-clara.png" alt="logo" class="logo-meio">
					<span class="login100-form-title p-b-59">
						Solicite seu orçamento
					</span>
					<div class="wrap-input100 validate-input" data-validate="Digite o e-mail">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="email" name="email" placeholder="email@email.com" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Digite a disponibilidade">
						<span class="label-input100">Sua disponibilidade de horários</span>
						<input class="input100" type="text" name="disponibilidade" placeholder="Sua disponibilidade" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Digite a resposta">
						<span class="label-input100">Já tem alguma tatuagem?</span>
						<input class="input100" type="text" name="tattoo" placeholder="Tem alguma tattoo?" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Foto de referência</span>
						<input class="input100" type="file" name="foto" placeholder="foto de referencia" accept="image/*">
						<span class="focus-input100"></span>
						<small>A referência da sua nova tattoo</small>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Foto do local</span>
						<input class="input100" type="file" name="foto_local" placeholder="foto de referencia" accept="image/*">
						<span class="focus-input100"></span>
						<small>O local da sua nova tattoo</small>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Digite a resposta">
						<span class="label-input100">Deixe seu recado com tamanho e onde ficaria em você</span>
						<textarea class="input100" name="detalhes" required></textarea>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Digite a resposta">
						<span class="label-input100">A tatuagem seria pra cobertura?</span>
						<input class="input100" type="text" name="cobertura" placeholder="a tattoo é pra cobertura?" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Envia pra gente a tatuagem que seria coberta</span>
						<input class="input100" type="file" name="foto_cobertura" placeholder="tattoo" accept="image/*">
						<span class="focus-input100"></span>
						<small>A tatuagem que seria coberta</small>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Solicitar orçamento
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>