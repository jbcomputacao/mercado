<HTML>
<HEAD>
 <TITLE>Movimentação --> movcli.php</TITLE>

</HEAD>
<BODY>
<?php
require("conexao.php");         //Variavel Post de acordo com a camada visual loccli.php
$codcli=$_POST["codcli"];
$nomecli=$_POST["nomecli"];
$endcli=$_POST["endcli"];
$telcli=$_POST["telcli"];
$celcli=$_POST["celcli"];
$objetcli=$_POST["objetcli"];
$observcli=$_POST["observcli"];
$usucli=$_POST["usucli"];
$senhacli=$_POST["senhacli"];

$atualizar=$_POST["botao"];
$excluir=$_POST["botao"];

if($atualizar=="atualizar"){
  $sql="update cliente set nomecli='$nomecli',endcli='$endcli', telcli='$telcli', celcli='$celcli',
        objetcli='$objetcli', observcli='$observcli', usucli='$usucli', senhacli='$senhacli' where codcli=$codcli";
        mysql_query($sql)or die("Erro ao atualizar os dados".$sql);
        }

if($excluir=="excluir"){
    $sql="delete from cliente where codcli=$codcli";
    mysql_query($sql) or die ("Erro ao excluir dados".mysql_error());
    }
?>
<a href="sistema_cadastro.php">Sistema de Cadastro</a>
</BODY>
</HTML>
