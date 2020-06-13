<?php

class Usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        global $msgErro;
        try {
        $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
    } catch (PDOException $e) {
        $msgErro = $e->getMessage();
    }


    }

    public function logar()
    {
        global $pdo;

        //verifica se usuario esta cadastrado
        $sql = $pdo->prepare("SELECT usuarioID FROM usuarios WHERE usuario = :u AND senha = :s");
        $sql->bindValue(":u",$usuario);
        $sql->bindValue(":s",$senha);
        $sql->execute();
        if($sql->rowCount( > 0))
        {
        //entrar na sessão
            $dado = $sql->fetch();
            session_start();
            $_SESSION['usuarioID'] = $dado['usuarioID'];
            return true; //logado com sucesso
        }
else
{
    return false; //nao foi possivel logar
}

    }

}
