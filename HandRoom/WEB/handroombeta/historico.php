    <?php
    //MOSTRA O HISTÓRICO COMPLETO DA LEITURA DOS SENSORES

    //require_once 'classes/Sensores.php';
    function __autoload($class) {
      require_once 'classes/' . $class . '.php';
    }

    session_start();

    $user = New Usuarios();
    if ($user->isLoggedIn()){

    }else{
      header('Location:index.php');
    }


    $salas = new Salas();
    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>handRoom - Sensores</title>

     <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <?php  
     include_once 'classes/metodos.php';
     $m = new Metodos();
     $m->cabecalho();
     ?>

   </head>


   <!--style="background-image: url('img/fundo2.jpg')"-->
   <body>



    <div class="container">
      <!-- Form cadastrar -->
      <div style="margin: 100px 0;">

        <h1 style="margin-top:13%; text-align: center;">Histórico de Leitura dos Sensores:</h1>
        <br><br>


        <!-- Inicio da tabela -->
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr class="active">
              <th>Nome</th>
              <th>Status</th>
              <th>Data de Leitura</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($salas->historicoSensores() as $key => $value) { ?>

            <tr>
              <td><?php echo $value->nome_sensor;?></td>
              <td><?php echo $value->nome_estado;?></td>
              <td><?php echo $value->data;?></td>
            </tr>

            <?php } ?>
          </tbody>

        </table> <!-- Fim da tabela -->
        <br><br>
      </div> <!-- fim cantainer -->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js" integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g=" crossorigin="anonymous"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
      <?php //chama rodapé   
      $m->rodape();
      ?>
      </html>