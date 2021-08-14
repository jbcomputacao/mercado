<HTML>
<HEAD>
 <TITLE>Movimentação --> movfunc.php</TITLE>

</HEAD>
<BODY>
<?php
require("conexao.php");
$codfunc=$_POST["codfunc"];
$nomefunc=$_POST["nomefunc"];
$endfunc=$_POST["endfunc"];
$telfunc=$_POST["telfunc"];
$celfunc=$_POST["celfunc"];
$cpffunc=$_POST["cpffunc"];
$usufunc=$_POST["usufunc"];
$senhafunc=$_POST["senhafunc"];

$atualizar=$_POST["botao"];
$excluir=$_POST["botao"];

if($atualizar=="atualizar"){
       $sql="update funcionario set nomefunc='$nomefunc', endfunc='$endfunc', telfunc='$telfunc',
       celfunc='$celfunc', cpffunc='$cpffunc', usufunc='$usufunc', senhafunc='$senhafunc' where codfunc=$codfunc";
       mysql_query($sql) or die ("Erro ao atualizar Dados".$sql);
}
if($excluir=="excluir"){
       $sql="delete from funcionario where codfunc=$codfunc";
       mysql_query($sql) or die(" Erro ao excluir dados".mysql_error());
       }
       ?>
<a href="sistema_cadastro.php">Sistema de Cadastro</a>
</BODY>
</HTML>
