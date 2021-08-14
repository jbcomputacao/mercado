<?php

include("conexao.php"); //conectar ao banco de dados

//camada visual
$usuario=$_POST["usuario"];
$cpf=$_POST["cpf"];
$senha=$_POST["senha"];

//consulta - verificar a visão
//visão cliente será verificada primeiramente
$sql="select* from cliente where usucli='$usuario' and senhacli='$senha' and cpfcli='$cpf'";
$rs=mysql_query($sql);
$linha=mysql_fetch_array($rs);

$codcli=$linha["codcli"];

if($codcli=="") //se não encontrar o cliente  ...ai verifica o funcionario

{
                include("verifica_funcionario.php");
}
else{
     setcookie("codcli",$codcli); //cria o cookie... variavel gobal... que é enxergada em todo o sistema.
     include("verifica_pedido.php"); //Criar o cookie do pedido na memoria para ser usado posteriormente
     header("location:lista_produto2.php"); //redireciona para a pratileira do mercado
     
}
?>

