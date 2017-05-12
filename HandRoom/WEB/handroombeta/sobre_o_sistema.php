<?php  
//FALA OS OBJETIVOS E O QUE É O SISTEMA

include 'classes/metodos.php';
$m = new Metodos();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>handRoom - Sobre</title>
	<?php $m->cabecalho1(); ?>
</head>


<body>

	<style type="text/css">
		#p{
			font-size: 25px;
			text-align: justify;
			margin-left: 13%; 
			margin-right: 13%;
		}

		#pp{
			font-size: 15px;
			text-align: center;
		}
	</style>

	<div style="background-color: #fff; text-align:center; margin-top: 7%;"><b>
		<br><br>
		<img src="img/logo.png">
		<h1 style="text-align: center; color:black; color: #006400;">Sobre o Sistema</h1>
		<br>
		<div style="color:black;">
			<p id="p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sabe quando você precisa ir a alguma sala/setor da instituição e, ao chegar lá, não encontra ninguém? Além de ser desgastante, você perde seu tempo. Mas, o sistema handRoom vem como uma forma de solucionar esse problema.</p>
			<p id="p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;handRoom significa ter o controle das salas. Com um sensor de presença posicionado estrategicamente em cada sala/setor da instituição, ele consegue verificar se há a presença de alguém no local e enviar essa informação, para que em qualquer dispositivo conectado à internet, você possa ter essa a mesma, em tempo real, acessando o site.</p>
			<p id="p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Não precisa ser cadastrado no sistema para ter acesso a essas informações. Basta acessar o site! Não perca mais tempo! Antes de ir a sala ou setor, certifique-se de não ter uma surpresa desagradável e perder a viagem.</p>
		</div>

		<div style="color:black; margin-top: 7%;">
			<h1 style="color: #006400;">Quem Somos?</h1>
			<br>
			<p id="p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O handRoom foi criado com finalidade acadêmica, como pré-requisito para obtenção de notas das matérias de “Programação para Internet” e “Projeto de Sistemas para Internet”. Foi desenvolvido pala aluna Behatris Fiorentini, estudante do ¹TADS do ²IFES – Campus Santa Teresa, com orientação do professor Milton César Paes Santos, que leciona no IFES – Campus Santa Teresa no curso TADS e é aluno doutorando da ³UFES.</p>
			<br>
			<p id="pp">¹ TADS: Tecnologia em Análise e Desenvolvimento de Sistemas; | ² IFES: Instituto Federal do Espírito Santo. | ³ UFES: Universidade Federal do Espírito Santo.</p>
			<br><br><br><br>
		</div>

	</b></div>

	<?php $m->rodape(); ?>
</body>
</html>