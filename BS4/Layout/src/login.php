<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title> LOGIN PAGE </title>

        </head>
<?php

    include "conexao.inc";

    $vusuario=$_POST['f_usuario'];
    $vsenha=$_POST['f_senha'];

    $sql="SELECT * FROM usuarios WHERE usuarioID='$vusuario' AND senhaUsuario='$vsenha'";
    $res=mysqli_query($con,$sql);
    $linha=mysqli_affectedrows($con);

    if($linha > 0){
        $num=rand(100000,900000);
        setcookie("numLogin",$num); //grava sessão do usuario logado
        header("Location:index.php?num1=$num");

    }else{
        echo "ERRO no logiiin! <br/>";
        echo "<a href='Login.html'> Voltar </a>";
    }

    mysqli_close($con);
?>

</body>
</html>