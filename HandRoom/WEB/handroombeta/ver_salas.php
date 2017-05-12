	<?php
	//MOSTRA AS SALA CADASTRADAS NO SISTEMA E ATUALIZA O ESTADO DE PRESENÇA/AUSENCIA A CADA 32000 MILISEGUNDOS

	//busca classes principais de uso, como a BD.php
	function __autoload($class) {
		require_once 'classes/' . $class . '.php';
	}
	/*objeto salas*/
	$salas = new Salas();
	?>

	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
	<meta charset="utf-8" />

	<head>
	<?php  //exibe o cabeçalho
	include_once 'classes/metodos.php';
	$m = new Metodos();
	$m->cabecalho();
	?>

	<!--importando bibliotecas a serem utulizadas-->
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<script type="text/javascript" src="js/bootstrap.js"/></script>
	<!--Título da página-->
	<title>handRoom - Salas</title>
	<!--Escolha da codificação do texto-->
	<meta charset="utf-8">

	<!--Recarre de 32 em 32 segundos a div nomeada de refresh para pegar os dados atualizados que chegam no banco de dados de 30 em 30 segundos-->
	<script type="text/javascript">
		var tempo = window.setInterval(carrega, 32000);//define o tempo em que vai ocorrer a atualização
		//var tempo2 = window.setInterval(carrega2, 32000);
		function carrega(){
			$('#refresh').load("ver_salas.php #refresh");//recarrega a div refresh que está no arquivo ver_salas.php
			$('#refresh1').load("ver_salas.php #refresh1");
		}

		
	</script>

	<body><!--Corpo da página-->
		<div style="background-image: url(img/fundo.jpg); margin-bottom: 5%;" class="col-md-12"> <!--Plano de fundo principal da página-->

			<br><br> <!--Título da página-->
			<h1 style="margin-top: 7%; color: #fff;text-align: center;">Salas Monitoradas</h1>
			<br><br>

			<!--Div principal do sensor 1-->
			<div style="width: 200px; height: 220px; background-image: url(img/fundo2.jpg); margin-left: 12%; text-align: center; vertical-align: center; color: black;" class="col-md-3">

				<img src="img/labinfor.png"> <!--Imagem de representação do sensor-->

				<div id="refresh" name="refresh"><!--div com as informações a serem atualizadas continuamente-->
					<?php //passa o sensor em questão e define a variavel para passar os valores
					foreach ($salas->sensor1(1) as $key => $value) { 
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
							<?php $salas->cor(1);?> <!--passa como parâmetro o sensor-->
						</b></p>

						<?php } ?><!--Fim do for-->
					</div><!--div refresh-->
				</div><!--Div principal de caracterização do campo-->


				<!--Div principal do sensor 2-->
				<div style="width: 200px; height: 220px; background-image: url(img/fundo2.jpg); margin-left: 5%; text-align: center; vertical-align: center; color: black;" class="col-md-3">

					<img src="img/lab1.png"> <!--Imagem de representação do sensor-->

					<div id="refresh1" name="refresh1"><!--div com as informações a serem atualizadas continuamente-->
					<?php //passa o sensor em questão e define a variavel para passar os valores
					foreach ($salas->sensor1(2) as $key => $value) { 
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
							<?php $salas->cor(2);?> <!--passa como parâmetro o sensor-->
						</b></p>

						<?php } ?><!--Fim do for-->
					</div><!--div refresh-->
				</div><!--Div principal de caracterização do campo-->


				<div class="col-md-12">
					<br><br>
				</div>
			</div> <!--Fim da div que possui o plano de fundo principal-->

			


			<?php //exibe o rodapé
			$m->rodape();
			?>

			
		</body>
		
		</html>