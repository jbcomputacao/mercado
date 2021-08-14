<HEAD>
 <TITLE>Movimentação --> movprod.php</TITLE>

</HEAD>
<BODY>
<?php
require("conexao.php");
$codprod=$_POST["codprod"];
$nomeprod=$_POST["nomeprod"];
$qtprod=$_POST["qtprod"];
$valorprod=$_POST["valorprod"];
$codfornprod=$_POST["codfornprod"];

$atualizar=$_POST["botao"];
$excluir=$_POST["botao"];

if($atualizar=="atualizar"){
   $sql="update produto set nomeprod='$nomeprod', qtprod='$qtprod', valorprod='$valorprod',
   codfornprod='$codfornprod' where codprod=$codprod";
   mysql_query($sql) or die ("Erro ao atualizar os dados".$sql);
}
if($excluir=="excluir"){
  $sql="delete from produto where codprod=$codprod";
  mysql_query ($sql) or die ("Erro ao excluir dados".mysql_error());
}
?>
<a href="sistema_cadastro.php">Sistema de Cadastro</a>
</BODY>
</HTML>
