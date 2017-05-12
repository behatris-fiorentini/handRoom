<?php
require_once 'CrudUser.php';

class Usuarios extends CrudUser {

    protected $tabela = 'usuario';
    
    //busca dados por id
    public function findUnit($id_usuario) {
        $sql = "SELECT * FROM $this->tabela WHERE id_usuario = :id_usuario";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT); 
        $stm->execute();
        return $stm->fetch();
    }



    //buscatodos os usuarios e seus dados
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }


    //inser no banco de dados
    public function insert() {

     $sql = "INSERT INTO $this->tabela (nome, email, senha, data) VALUES (:nome, :email, :senha, NOW())";
     $stm = DB::prepare($sql);
     $stm->bindParam(':nome', $this->nome);
     $stm->bindParam(':email', $this->email);
     $stm->bindParam(':senha', $this->senha);
     
     return $stm->execute();
     
 }


    //verifica se o e-mail a ser cadastrado já existe no sistema
    //não deixa que e-mails já exstentes seja cadastrado
 function verificacao($email){
    $sql = "SELECT Count(email) from $this->tabela where email = :email";
    $stm = DB::prepare($sql);
    $stm->bindParam(':email', $email, PDO::PARAM_STR); 
    
    if ($stm->fetchAll() <= 0){
        return 0;
    }else{
        return 1;
    }
    
    
}


    //atualiza
public function update($id_usuario) {
    $sql = "UPDATE $this->tabela SET nome = :nome, email = :email, senha = :senha, data_alteracao = NOW() WHERE id_usuario = :id_usuario";
    
    $stm = DB::prepare($sql);
    $stm->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
    $stm->bindParam(':nome', $this->nome);
    $stm->bindParam(':email', $this->email);
    $stm->bindParam(':senha', $this->senha);

    return $stm->execute();
}


    //deleta
public function delete($id_usuario) {
    $sql = "DELETE FROM $this->tabela WHERE id_usuario = :id_usuario";
    $stm = DB::prepare($sql);
    $stm->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
    return $stm->execute();
}  


    //verifica se uma sessão está ativa
function isLoggedIn(){
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
        return false;
    }
    return true;
}




function autentica(){

    // echo $this->senha;
   $senhacrip = md5($this->senha);

   $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";

   $stmt = DB::prepare($sql);

   $stmt->bindParam(':email', $this->email);
   $stmt->bindParam(':senha', $senhacrip);

   $stmt->execute();

     //$usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
   $usuario = $stmt->fetchAll();

   if (count($usuario) <= 0){
    return 0;
} else {

        // pega o primeiro usuário
    $user = $usuario[0];

    //inicia sessão
    session_start();
    //definindo sessão
    $_SESSION['logged_in'] = true;
    $_SESSION['id_usuario'] =  $user->id_usuario;
    $_SESSION['nome'] = $user->nome;

        //toda vez que alguém logar, vai cadastrar no sistema a data e quem logou
    $sql = "INSERT INTO controle_acesso (usuario, data) VALUES (:usuario, NOW())";
    $stm = DB::prepare($sql);
    $stm->bindParam(':usuario', $user->id_usuario);
    $stm->execute();


    return 1;
}

}

//busca os dados de todos os usuarios que logaram no sistema
function historicolog(){
    $sql = "SELECT u.id_usuario, u.email, u.nome, c.data from controle_acesso c join usuario u ON u.id_usuario = c.usuario";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
}

}


