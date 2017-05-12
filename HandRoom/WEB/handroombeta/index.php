<?php  
//PÁGINA DE LOGIN

require_once "classes/Usuarios.php";

if ( isset($_POST['logar']) ){

		//resgata os dados digitados pelo usuário no formulario
	$email = $_POST['email'];
	$senha = $_POST['senha'];


		//verifica se os campos não foram deixados vazios
	if (empty($email) || empty($senha)){
		echo '<script type="text/javascript">window.alert("Todos os campos são de preenchimento obrigatório");</script>';
	} else {
		$usuario = new Usuarios();
		$usuario->setEmail($email);
		$usuario->setSenha($senha);

		if ($usuario->autentica() == 1){
			header("location: home.php");
		}else{
			echo '<script type="text/javascript">window.alert("Usuario ou senha incorretos! Verifique os campos e tente novamente!");</script>';
		}

	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>handRoom - Login</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/estilo.css" rel="stylesheet">

	<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<script src="js/jquery-3.1.0.min.js"></script>

	<script src="js/validacao.js"></script>
</head>



<body id="page-top" class="index">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header page-scroll" style="text-transform:none;">
				<a class="navbar-brand" href="index.php">handRoom</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right" style="width:55%;">
					<!--Campos para entrada no sistema-->
					<form class="form-inline" method="post">

						<div class="input-group">
							<input name="email" type="email" class="form-control" placeholder="E-mail do Usuário" style="border-radius: 7px; height: 39px;">
						</div>
						<div class="input-group">
							<input name="senha" type="password" class="form-control" placeholder="Senha do Usuário" style="border-radius: 7px; height: 39px;">
						</div>

						<input name="logar" type="submit" class="btn btn-success" value="Entrar" style="width: 115px; height: 39px;">
					</form>

					<!--Menu Inicial-->

					<li>
						<a href="ver_salas.php">Ver sala</a>
					</li>

					<li>
						<a href="como_usar.php">Como Usar</a>
					</li>

					<li>
						<a href="sobre_o_sistema.php">Sobre o Sitema</a>
					</li>

					<li>
						<a href="contato.php">Contato</a>
					</li>
				</ul>

			</div><!--Fim do menu-->
		</div>
	</nav>


	<header>

		<div class="container" style="margin-left:5%;">
			<div class="row">

				<!--Layout parte direita - "Logotipo"-->
				<div class="col-lg-7">
					<br><br>
					<img class="img-responsive" src="img/logo.png" alt="" style="margin-top:3%; ">
					<div class="intro-text">
						<span class="name" style="text-transform:inherit;">handRoom</span>
					</div>
				</div>

				<!--Layout parte esquerda - formulário-->
				<div id="formcadastro" class="col-lg-5" style="text-align: center; float:center; background-image: url(img/fundo2.jpg); color: black;">
					<h3>Quer ir até uma sala ou setor?</h3>
					<h4>Verifique se não irá perder a viagem!</h4>
					<h6 style="text-transform: none;">Com o handRoom, você consegue verificar se hà presença de alguém no local de qualquer dispositivo conectado à internet, em tempo real, acessando o site.</h6>
					<br>

					<div class="col-lg-6" style="text-align: center; float: center;">
						<a href="ver_salas.php" ><button style="width: 150px; height: 150px; background-color: gray; color: black; font-size: 20px; margin-left: 70%;"><img src="img/btn.png"><b>Ver Salas</b></button></a>
						<br><br><br><br>
					</div>
				</div>
			</div>
		</div>
	</header>


	<!-- Footer -->
	<footer class="text-center">
		<div class="footer-above">
			<div class="container">
				<div class="row">
					<div class="footer-col col-md-4">
						<h3>Localização</h3>
						<p>São João de Petrópolis<br>Santa Teresa/ ES</p>
					</div>
					<div class="footer-col col-md-4">
						<h3>Acesse</h3>
						<ul class="list-inline">
							<li>
								<a href="https://www.facebook.com/behatris.fiorentini" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
							</li>
							<li>
								<a href="https://plus.google.com/u/0/115875706106956356281" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
							</li>
							<li>
								<a href="https://github.com/behatris-fiorentini" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
							</li>
						</ul>
					</div>
					<div class="footer-col col-md-4">
						<h3>Sobre</h3>
						<p>Trabalho desenvolvido como pré-requisito para obtenção de notas da disciplina de Programação para Internet. </p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-below">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						Copyright &copy; handRoom  2016
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>