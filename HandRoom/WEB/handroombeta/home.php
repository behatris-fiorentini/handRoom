<?php 
//TELA INICIAL DO SISTEMA

include 'classes/metodos.php';
include 'classes/Usuarios.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<?php 	
	//Cabeçalho fixo da Página
	$m = new Metodos();
	$m->cabecalho();
	?>

	<title>handRoom - Home</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/estilo.css" rel="stylesheet">

</head>



<body>

	<header>
		<div class="container" style="margin-left:5%;">
			<?php 
			$user = New Usuarios();
			if ($user->isLoggedIn()){
				echo "<h3>Bem Vindo, " . $_SESSION['nome'] . "!</h3>";			
			}else{
				header('Location:index.php');
			}
			?>
			<div class="row">
				<!--Layout parte direita - "Logotipo"-->
				<div class="col-lg-6">
					<img class="img-responsive" src="img/logo.png" alt="" style="margin-top:3%;">
					<div class="intro-text">
						<span class="name" style="text-transform:inherit;">handRoom</span>
					</div>
				</div>


				<!--Layout parte esquerda - formulário-->
				<div id="formcadastro" class="col-lg-6" style="margin-left: -1%;">
					<br><br>


					<!--Botão Usuários-->
					<div class="col-lg-4" style="color: black; size: 15px;">
						<a href="controle_usuario.php"><button style="width: 150px; height: 150px;"><img src="img/usuarios.png"><b>Usuários</b></button></a>
					</div>

					<div class="col-lg-4">
						<a href="controle_sensor.php" ><button style="width: 150px; height: 150px;"><img src="img/sensores.png"><b>Sensores</b></button></a>
					</div>

					<div class="col-lg-4">
						<a href="historico.php" ><button style="width: 150px; height: 150px;"><img src="img/historico1.png"><b>Hist. de Leitura</b></button></a>
					</div>


					<div class="col-lg-12">
						<br>

						<div class="col-lg-4"></div>
						<div class="col-lg-4">

							<a href="historico_login.php" ><button style="width: 150px; height: 150px;"><img src="img/login_his.png"><b>Histórico de Login</b></button></a>

						</div>
						
					</div>

				</div>





			</div>
		</div>
	</div>
</header>



<!--Rodapé-->
<?php $m->rodape(); ?>
</body>
</html>