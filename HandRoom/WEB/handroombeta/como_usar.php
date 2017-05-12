	<?php  
	include 'classes/metodos.php';
	$m = new Metodos();
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">

		<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<script src="js/jquery-3.1.0.min.js"></script>

		<title>handRoom - Como Usar</title>
		<?php $m->cabecalho1(); ?>
	</head>


	<body>

		<style type="text/css">
			#pp{
				font-size: 25px;
			}

			#h{
				color: #006400;
			}

		</style>

		<div style="color: black; text-align: justify; margin-top: 5%; font-size: 25px;">
			<div style="margin-left: 13%; margin-right: 13%; font-size: 25px;">

				<br><br>
				<h1 id="h" style="font-size: 50px; text-align: center;">COMO FUNCIONA?</h1>
				<br>


				<h2 id="h">Usuários/ Administrador</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para te acesso ao sistema de monitoramento de salas, não é preciso fazer login, basta clicar no item “ver salas” presente no menu na parte superior direita da tela. Apenas moderadores que desejam realizar configurações do sistema devem/podem fazer login.</p>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Os administradores têm acesso total ao sistema. Além de visualizar a sala e ter o histórico completo dos sensores das mesmas, ele pode cadastrar outros moderadores e sensores no sistema.</p>
				<br><br><br>

				<h2 id="h">COMO SE CADASTRAR</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apenas administradores podem ser cadastrados no sistema e apenas eles, já logados no sistema, podem cadastrar outros administradores.</p>
				<br><br>

				<h2 id="h">INDEX</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Página inicial do sistema que possui seu nome, logomarca e apresentação do sistema. Apresenta também os campos que deverão ser preenchidos pelos administradores, caso queiram acessar as configurações do sistema. Nela está o menu para que os usuários consigam acessar a tela de visualização das salas (sensores) cadastradas. Nela o usuário também tem acesso a página de contato, a que tem informações sobre o sistema e inclusive essa, que mostra como o sistema funciona. </p>
				<br><br>

				<h2 id="h">HOME</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Página inicial dos administradores, onde possui a logomarca do sistema, alguns botões de funcionalidade, bem como o painel de menu de administração de sensores e usuários;</p>
				<br><br>

				<h2 id="h">VER SALAS</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nessa página o usuário pode ver todos os sensores cadastrados em tempo real, assim se poderá saber, se na sala em que está posicionado, possui alguém presente ou não.</p>
				<br><br>


				<h2 id="h">SENSORES</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Página de administração dos sensores. Nela estão listados todos os sensores cadastrados e se pode cadastrar novos, bem como alterar ou excluir os já existentes.</p>
				<br><br>

				<h2 id="h">USUARIOS</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Página de administração dos usuários. Nela estão listados todos os usuários cadastrados e se pode cadastrar novos, bem como alterar ou excluir os já existentes.</p>
				<br><br>

				<h2 id="h">SAIR</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caso o administrador esteja logado, e já terminou as ações a serem feitas, clicando desse item do menu, encerrara sua sessão.</p>
				<br><br>

				<h2 id="h">SOBRE O SISTEMA</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Possui informações sobre o que é o sistema, para que serve e sobre seus desenvolvedores.</p>
				<br><br>

				<h2 id="h">COMO USAR</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Possui informações de utilização do sistema.</p>
				<br><br>

				<h2 id="h">ENTRAR EM CONTATO</h2>
				<br>
				<p id="pp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caso o usuário tenha dúvidas, críticas, sugestões ou afins, nessa página possui as formas de contato com o desenvolvedor.</p>
				<br><br>


			</div>
		</div>

		<?php $m->rodape(); ?>
	</body>
	</html>