<?php

    include "conexao.inc";

    $vnomeproduto=$_POST["NOME_PRODUTO"];
    $vtemposervico=$_POST["FAB_PRODUTO"];
    $vrespservico=$_POST["PRECO_PRODUTO"];
    $vprecoservico=$_POST["ESP_PRODUTO"];
    $vprodutoservico=$_POST["QTD_PRODUTO"];
    $vpatazservico=$_POST["PATAZ_PRODUTO"];

    $sql="INSERT INTO cadastro_clientes VALUES (NULL,'$vnomeservico', $vtemposervico, '$vrespservico', $vprecoservico, '$vprodutoservico', $vpatazservico)";
    $res=mysqli_query($con,$sql);
    $linhas=mysqli_affectedrows($con);

    if($linhas == 1){
        echo "Registro gravado com sucesso</br>";
    }else{
        echo "Falha na gravação do registro</br>";
    }

    mysqli_close($con);
?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title> LOGIN PAGE </title>

        </head>


</body>
</html>