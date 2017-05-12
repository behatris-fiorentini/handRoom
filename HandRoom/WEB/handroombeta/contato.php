		<?php
		include "classes/metodos.php";
		$m = new Metodos();
		?>

		<!DOCTYPE html>
		<html>
		<head>

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<?php $m->cabecalho(); ?>

			<title>handRoom - Contato</title>

			<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
			<link href="css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom CSS -->
			<link href="css/estilo.css" rel="stylesheet">

			<!-- Custom Fonts -->
			<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

			<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

			<link
			href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

		</head>



		<body>
			<div style="margin-top: 7%; color: #006400; text-align: center;">
				<br><br>
				<h1>Dúvidas, críticas ou sugestões?</h1>
				<h2>Entre em contato conosco!</h2>
				<br>
				<h4>E-mail para contato:</h4>
				<h2 style="color: #000; text-transform:lowercase;">handroom@gmail.com</h2>

				<br><br><br>

				
			</div>
			<div style=" text-align: center; color: black;">
				<img style="width: 100px; height: 100px;"
				src="img/img_contato.jpg" alt="..." class="img-circle">
				<h4>Behatris Fiorentini</h4>
				<ul class="list-inline" >
					<li><a style="color: black; border-color: black;" href="https://www.facebook.com/jonast652"
						class="btn-social btn-outline"><i
						class="fa fa-fw fa-facebook"></i></a></li>

						<li><a style="color: black; border-color: black;" href="https://plus.google.com/115007660547935969589"
							class="btn-social btn-outline"><i
							class="fa fa-fw fa-google-plus"></i></a></li>
						</ul>
					</div>
					<br><br><br>
					<?php $m->rodape(); ?>
				</body>
				</html>