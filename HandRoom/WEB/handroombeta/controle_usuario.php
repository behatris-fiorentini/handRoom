        <?php
        //GERENCIAMENTO DE USUÁRIOS

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

            <!--Caso se escolha excluir, exibe alerta com pedido de confirmação-->
            <script type="text/javascript">
              function fn_excluir(){
                $('.form_excluir').submit(function(){
                    return confirm('Tem certeza que deseja excluir?');
                });
            }

            function fn_alterar(nome, email, senha, id_usuario){
                $('#nome').val(nome);
                $('#email').val(email);
                $('#senha').val(senha);
                $('#id_usuario').val(id_usuario);
            }

        </script>

    </head>


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
                $usuario = new Usuarios();

                            // Cadastro de Usuario
                if ( isset($_POST['cadastrar']) ):

                    $nome  = $_POST['nome'];
                $email = $_POST['email'];
                $senha = md5($_POST['senha']);

                $usuario->setNome($nome);
                $usuario->setEmail($email);
                $usuario->setSenha($senha);

                
              /*  if ($usuario->insert()) {
                    echo '<script type="text/javascript">window.alert("Inserido com Suscesso!");</script>';

                } else {
                    echo '<script type="text/javascript">window.alert("Erro ao Inserir!");</script>';
                }*/
                if($usuario->verificacao($email) <= 0){
                    if ($usuario->insert()) {
                        echo '<script type="text/javascript">window.alert("Inserido com Suscesso!");</script>';

                    } else {
                        echo '<script type="text/javascript">window.alert("Erro ao Inserir!");</script>';
                    }
                }else{
                    echo '<script type="text/javascript">window.alert("Usuário já existe!");</script>';
                }






                endif;


                /*
                if ($usuario->insert()) {

                    echo '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>OK!</strong> Incluido com sucesso!!! </div>';

                } else {
                    echo '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>OK!</strong> Erro ao alterar!!! </div>';
                }
                endif;
                */

                            //exclusao de Usuario
                if (isset($_POST['excluir_ui'])){

                    $id = $_POST['id_ui'];

                    $usuario->delete($id);

                }

                            // Alterar Usuario
                if ( isset($_POST['alterar']) ) {
                    $id_usuario = $_POST['id_usuario'];
                    $nome  = $_POST['nome'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    $usuario->setNome($nome);
                    $usuario->setEmail($email);
                    $usuario->setSenha($senha);

                    $usuario->update($id_usuario);

                }
                ?>



                <h1 style="margin-top: 13%;">Controle de Usuários</h1>
                <br>
                <form class="form-inline" method="post">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                        <input name="nome" type="text" class="form-control" required placeholder="Nome do Usuário">
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><b>@</b></span>
                        <input name="email" type="email" class="form-control" placeholder="E-mail do Usuário">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-lock"></span>
                        <input name="senha" type="password" class="form-control" required placeholder="Senha do Usuário">
                    </div>

                    <input name="cadastrar" type="submit" class="btn btn-success" value="Cadastrar">
                </form>
            </div>
            <!-- Fim form cadastrar -->

            <script type="text/javascript"></script>
            <!-- Inicio da tabela -->
            <table class="table table-striped table-bordered table-hover" style="margin-top: -5%;">
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ultima Alteração</th>
                        <th style="width: 270px;">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuario->findAll() as $key => $value) { ?>

                    <tr>
                        <td> <?php echo $value->nome;?> </td>

                        <td> <?php echo $value->email;?> </td>

                        <td> <?php echo $value->data_alteracao;?> </td>




                        <td>
                            <form class="form_alterar" method="post" style="float: left; margin: 0 15px;">
                                <input name="id_usuario" type="hidden" value="<?=$value->id_usuario?>"/>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="fn_alterar('<?php echo $value->nome;?>', '<?php echo $value->email;?>', '<?php echo $value->senha;?>',<?php echo $value->id_usuario?>)">
                                    Alterar</button>
                                </form>


                                <!-- Modal para alterar Usuário -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" >
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" style="text-align: center;" id="myModalLabel">Alterando Usuário</h4>
                                            </div>
                                            <div class="modal-body" style="float: center; text-align: center;">
                                                <form class="form-inline" method="post">
                                                    <div class="input-group">
                                                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                                                        <input id="nome" name="nome" type="text" class="form-control" required value="" >
                                                    </div>
                                                    <br><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">@</span>
                                                        <input id="email" name="email" type="email" class="form-control">
                                                    </div>
                                                    <br><br>
                                                    <div class="input-group">
                                                     <span class="input-group-addon glyphicon glyphicon-lock"></span>
                                                     <input name="senha" type="password" class="form-control" required >
                                                 </div>
                                                 <br><br>
                                                 <input id="id_usuario" name="id_usuario" type="hidden" value=""/>
                                                 <input name="alterar" type="submit" class="btn btn-warning" value="Alterar">
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                             </div> <!-- fim Modal -->


                             <form class="form_excluir" method="post" style="float: left; margin: 0 15px;">

                                <input name="id_ui" type="hidden" value="<?=$value->id_usuario?>"/>

                                <button name="excluir_ui" type="submit" onclick="fn_excluir();" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>

                    </tr>

                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->
        </div> <!-- fim cantainer -->





        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.11.3.min.js" integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g=" crossorigin="anonymous"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- <script src="js/script.js"></script>-->
        <br><br>

        <?php  
                //chama rodapé
        $m->rodape();

        ?>

    </body>
    </html>