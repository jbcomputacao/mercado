<HTML>
<HEAD>
 <TITLE>Movimentação -->movforn.php</TITLE>
</HEAD>
<BODY>
<?php
require("conexao.php");
$codforn=$_POST["codforn"];
$nomeforn=$_POST["nomeforn"];
$endforn=$_POST["endforn"];
$cnpjforn=$_POST["cnpjforn"];

$atualizar=$_POST["botao"];
$excluir=$_POST["botao"];

if($atualizar=="atualizar"){
   $sql="update fornecedor set nomeforn='$nomeforn', endforn='$endforn', cnpjforn='$cnpjforn'
    where codforn=$codforn";
   mysql_query($sql) or die ("Erro ao atualizar os Dados".$sql);
    }
if($excluir=="excluir"){
   $sql=" delete from fornecedor where codforn=$codforn";
   mysql_query($sql) or die ("Erro ao excluir dados". mysql_error());
   }
?>
<a href="Sistema_Cadastrado.php">Sistema de Cadastro</a>
</BODY>
</HTML>
