        <?php
        //LISTA TODOS OS USUARIOS QUE JÁ ACESSARAM O SISTEMA

            //require_once 'classes/Usuarios.php';
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
            <title>handRoom - Usuários</title>

            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">            

        </head>


        <body>
            <?php  

            include_once 'classes/metodos.php';
            $m = new Metodos();
            $m->cabecalho();

            ?>

            <div class="container">
                <!-- Form cadastrar -->
                <div style="margin: 100px 0;">
                    <br><br>
                    <h1 style="text-align: center">Histórico de Acesso ao Sistema</h1>
                    <br><br>
                    <!-- Inicio da tabela -->
                    <table class="table table-striped table-bordered table-hover" >


                        <thead>
                            <tr class="active">
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data e Hora de Login no Sistema</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user->historicolog() as $key => $value) { ?>

                            <tr>
                                <td> <?php echo $value->id_usuario;?> </td>
                                <td> <?php echo $value->nome;?> </td>
                                <td> <?php echo $value->email;?> </td>
                                <td> <?php echo $value->data;?> </td>

                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- Fim da tabela -->
                </div> <!-- fim cantainer -->
            </div>

            <div>
        <?php   //chama rodapé
        $m->rodape();
        ?>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js" integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g=" crossorigin="anonymous"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- <script src="js/script.js"></script>-->
    <br><br>

</body>
</html>