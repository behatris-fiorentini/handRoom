    <?php

    function __autoload($class) {
        require_once 'classes/' . $class . '.php';
    }
    session_start();

    $user = New Usuarios();
    if ($user->isLoggedIn()){
      
    }else{
        header('Location:index.php');
    }

    
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

       <script type="text/javascript">

        function fn_excluir(){
            $('.form_excluir').submit(function(){
                return confirm('Tem certeza que deseja excluir?');
            });
        }

        function fn_alterar(nome_sensor, id_sensor){
            $('#nome_sensor').val(nome_sensor);
            $('#id_sensor').val(id_sensor);
        }


    </script>

</head>


<!--style="background-image: url('img/fundo2.jpg')"-->
<body>

    <?php  
    include_once 'classes/metodos.php';
    $m = new Metodos();
    $m->cabecalho();
    ?>

    <div class="container">
        <!-- Form cadastrar -->
        <div style="margin: 100px 0; text-align: center">

            <?php
            $sensor = new Sensores();

                    // Cadastro de sensores
            if ( isset($_POST['cadastrar']) ):
                $nome_sensor  = $_POST['nome_sensor'];
            $sensor->setNome_sensor($nome_sensor);


            if ($sensor->insert()) {
                echo '<script type="text/javascript">window.alert("Operação Realizada com Suscesso!");</script>';

            } else {
                echo '<script type="text/javascript">window.alert("Erro ao Inserir!");</script>';
            }
            endif;


                    //exclusao de Usuario
            if (isset($_POST['excluir_ui'])){
                $id = $_POST['id_ui'];
                $sensor->delete($id);
            }


                    // Alterar
            if ( isset($_POST['alterar']) ) {
                $id = $_POST['id_sensor'];
                $nome_sensor = $_POST['nome_sensor'];
                $sensor->setNome_sensor($nome_sensor);
                $sensor->update($id);
            }

            ?>



            <h1 style="margin-top: 13%;">Controle de Sensores</h1>
            <br>
            <form class="form-inline" method="post" action="controle_sensor.php">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-eye-open"></span>
                    <input name="nome_sensor" type="text" class="form-control" required placeholder="Preencha com o Nome do Sensor" style="width: 300px;">
                </div>
                <input name="cadastrar" type="submit" class="btn btn-success" value="Cadastrar">
            </form>
        </div>
        <!-- Fim form cadastrar -->


        <!-- Inicio da tabela -->
        <table class="table table-striped table-bordered table-hover" style="margin-top: -5%;">
            <thead>
                <tr class="active">
                    <th>Código</th>
                    <th>Nome</th>
                    <th style="width: 220px;">Ação</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($sensor->findAll() as $key => $value) { ?>

                <tr>
                    <td> <?php echo $value->id_sensor;?> </td>
                    <td> <?php echo $value->nome_sensor;?> </td>

                    <!--Botões de cadastrar e excluir da tabela-->
                    <td>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="fn_alterar('<?php echo $value->nome_sensor;?>',<?php echo $value->id_sensor;?>);">Alterar</button>

                     <!-- Modal para alterar -->
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Alterando Sensor</h4>
                                </div>

                                <div class="modal-body">
                                    <form class="form-inline" method="post">
                                        <div class="input-group">
                                            <span class="input-group-addon glyphicon glyphicon-user"></span>
                                            <input id="nome_sensor" name="nome_sensor" type="text" class="form-control" required value="" >
                                        </div>

                                        <input name="id_sensor" id="id_sensor" type="hidden" value=""/>
                                        <input name="alterar" type="submit" class="btn btn-warning" value="Alterar">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- fim Modal -->



                    <form class="form_excluir" method="post" style="float: left; margin: 0 15px;">

                        <input name="id_ui" type="hidden" value="<?=$value->id_sensor?>"/>

                        <button name="excluir_ui" type="submit" onclick="fn_excluir();" class="btn btn-danger">Excluir</button>
                    </form>
                </td>

            </tr>

            <?php } ?>
        </tbody>
    </table>
    <!-- Fim da tabela -->
    <br><br>

</div> <!-- fim cantainer -->





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js" integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g=" crossorigin="anonymous"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- <script src="js/script.js"></script>-->

<?php  
            //chama rodapé
$m->rodape();

?>

</body>
</html>