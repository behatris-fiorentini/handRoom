<!DOCTYPE html>
<html>
<head>









if(isset($_POST['enviar'])){
				if(empty($_POST['email']) || empty($_POST['senha'])){
					/*echo '<script type="text/javascript"> alert("Campo Obrigatório não Preenchido!");</script>';*/
					echo '<h6>passou</h6>';
				}else{
				echo'entrou no sql';
				$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
				$stm = DB::prepare($sql);

				$stm->execute(
					
					array(
						'email' => $_POST["email"],
						'senha' => $_POST["senha"]
						)
					);
				$count = $stm->rowCount();
				if($count>0){
					echo'entrou no session';
					$_SESSION['email'] = $_POST['email'];

					header("location:home.php");
				}else{
					echo '<script type="text/javascript"> alert("Usuario não existe! Verifique os dados dos campos e tente novamente!");</script>';
				}

}
              /* if($count>0){
                   public function historico() {
                    $sql = "INSERT INTO controle_acesso (nome, email, data) VALUES (:nome, :email, NOW())";
                    $stm = DB::prepare($sql);
                    $stm->bindParam(':nome', $this->nome);
                    $stm->bindParam(':email', $this->email);

                    return $stm->execute();

                }
            }*/
        
        }




	<title></title>
</head>
<body>

</body>
</html>

				<!--Div principal do sensor 3-->
				<div style="width: 200px; height: 220px; background-image: url(img/fundo2.jpg); margin-left: 5%; text-align: center; vertical-align: center; color: black;" class="col-md-3">

					<img src="img/tads.png"> <!--Imagem de representação do sensor-->

					<div id="refresh" name="refresh"><!--div com as informações a serem atualizadas continuamente-->
					<?php //passa o sensor em questão e define a variavel para passar os valores
					foreach ($salas->sensor1(3) as $key => $value) { 
						?>
						<!--Printa o nome do sensor (lugar onde ele está)-->
						<p style="size: 20px;"><b>
							<?php echo $value->nome_sensor;?></b>
						</p>
						<!--Printa a data e hora em que a leitura do sensor foi feita-->
						<p style="font-size: 13px;"><b>
							<?php echo $value->data;?>
						</b></p>
						<!--Printa o status do sensor buscado no BD (cor() define a cor em que o status vai ser exibido) -->
						<p id="status" name="status" style="font-size: 16px;"><b>
							<?php $salas->cor(3);?> <!--passa como parâmetro o sensor-->
						</b></p>

						<?php } ?><!--Fim do for-->
					</div><!--div refresh-->
				</div><!--Div principal de caracterização do campo-->


				<!--Div principal do sensor 4-->
				<div style="width: 200px; height: 220px; background-image: url(img/fundo2.jpg); margin-left: 5%; text-align: center; vertical-align: center; color: black; mar" class="col-md-3">

					<img src="img/coord.png"> <!--Imagem de representação do sensor-->

					<div id="refresh" name="refresh"><!--div com as informações a serem atualizadas continuamente-->
					<?php //passa o sensor em questão e define a variavel para passar os valores
					foreach ($salas->sensor1(4) as $key => $value) { 
						?>
						<!--Printa o nome do sensor (lugar onde ele está)-->
						<p style="size: 20px;"><b>
							<?php echo $value->nome_sensor;?></b>
						</p>
						<!--Printa a data e hora em que a leitura do sensor foi feita-->
						<p style="font-size: 13px;"><b>
							<?php echo $value->data;?>
						</b></p>
						<!--Printa o status do sensor buscado no BD (cor() define a cor em que o status vai ser exibido) -->
						<p id="status" name="status" style="font-size: 16px;"><b>
							<?php $salas->cor(4);?> <!--passa como parâmetro o sensor-->
						</b></p>

						<?php } ?><!--Fim do for-->

					</div><!--div refresh-->
				</div><!--Div principal de caracterização do campo-->







				sistema de login teste index

					<?php
	require_once 'classes/DB.php';
	require_once 'classes/Usuarios.php';
	require_once 'classes/CrudUser.php';

	function logar(){
		session_start();
		try {

			if(isset($_POST["enviar"])){
				if(empty($_POST['email']) ||empty($_POST['senha']) ){
					echo '<script type="text/javascript">alert("Todos os Campos são de Preenchimento Obrigatório!");</script>';
				}else{
					$sql = "SELECT * FROM usuario WHERE email = :email AND senha = : senha";
					$stm = DB::prepare($sql);
					$stm->execute(
						array(
							'email' => $_POST["email"],
							'senha' => $_POST["senha"]
							)
						);
					$stm->fetchAll();
					$count = $stm->rowCount();

					if($count > 0){
						$_SESSION["email"] = $_POST["email"];
						header("location:home.php");
					}else{
						echo '<script type="text/javascript">alert("Login ou senha incorretos!");</script>';
					}
				}
			}

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}
	}
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>handRoom - Login</title>
		<script type="text/javascript"></script>
	</head>


	<body>
		<form method="POST">
			<input type="email" name="email" id="email" placeholder="Digite o E-mail do Usuário">
			<input type="password" name="senha" id="senha" placeholder="Digite a Senha do Usuário">
			<input type="submit" name="enviar" value="Enviar" onclick="logar()">
		</form>
	</body>
	</html>