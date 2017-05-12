<?php  

class Metodos{

    function cabecalho(){
       echo '

       <head>

       	<link href="css/bootstrap.min.css" rel="stylesheet">

        <meta charset="utf-8" />

        <!-- Custom CSS -->
        <link href="css/estilo.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/validacao.js"></script>
        
    </head>

    <body id="page-top" class="index" style="height:10%;">
      <nav class="navbar navbar-default navbar-fixed-top">
       <div class="container">

          <div class="navbar-header page-scroll" style="text-transform:none;">

           <!--Logomarca cabeçalho-->
           <a class="navbar-brand" href="home.php">handRoom</a>
       </div>

       <!--formulario de login e menu-->
       <div class="collapse navbar-collapse">
           <ul class="nav navbar-nav navbar-right" style="width:55%;">
            <!--Menu Inicial-->

            <li>
                <a href="home.php">Home</a>
            </li>

            <li>
                <a href="ver_salas.php">Ver salas</a>
            </li>

            <li>
                <a href="controle_usuario.php">Usuários</a>
            </li>

            <li>
                <a href="controle_sensor.php">Sensores</a>
            </li>
            <li>
                <a href="logout.php">Sair</a>
            </li>
        </ul>

    </div><!-- colapse-->
</div><!--div container-->
</nav>
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
</body>
';
}


function rodape(){

	echo '

    <meta charset="utf-8" />
    <link href="css/estilo.css" rel="stylesheet">
    <footer class="text-center" style="margin-bottom:0%;">
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
                    <div class="footer-col col-md-4" style="color:white;">
                     <ul> <h3 style:"text-align:center;">Sobre</h3></ul>
                     
                     <ul> <a href="sobre_o_sistema.php"><h5 style="color:#fff;">Sobre o Sistema</h5></a> </ul>
                     <ul> <a href="como_usar.php"><h5 style="color:#fff;">Como Usar</h5></a> </ul>
                     <ul> <a href="contato.php"><h5 style="color:#fff;">Entrar em contato</h5></a> </ul>
                     
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; handRoom 2016
                </div>
            </div>
        </div>
    </div>
</footer>

';

}



function cabecalho1(){
    echo '

    <head>

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <meta charset="iso-8859-1" />

        <!-- Custom CSS -->
        <link href="css/estilo.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/validacao.js"></script>
        
    </head>

    <body id="page-top" class="index" style="height:10%;">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">

                <div class="navbar-header page-scroll" style="text-transform:none;">

                   <!--Logomarca cabeçalho-->
                   <a class="navbar-brand" href="home.php">handRoom</a>
               </div>

               <!--formulario de login e menu-->
               <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav navbar-right" style="width:55%;">
                    <!--Menu Inicial-->

                    <li>
                        <a href="home.php">Home</a>
                    </li>

                    <li>
                        <a href="ver_salas.php">Ver salas</a>
                    </li>

                    <li>
                        <a href="sobre_o_sistema.php">Sobre</a>
                    </li>

                    <li>
                        <a href="como_usar.php">Como Usar</a>
                    </li>
                    <li>
                        <a href="contato.php">Contato</a>
                    </li>
                </ul>

            </div><!-- colapse-->
        </div><!--div container-->
    </nav>
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
</body>
';
}





}
?>