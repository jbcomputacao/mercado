<html>
<head>
<title>Excluir</title>
</head>
<body>
<?php
include("conexao.php");
$coditem=$_GET["coditem"];
                           /*
$sql="select* from item where coditem='$coditem'";
$resultado=mysql_query($sql) or die ("Problema na Consulta");
$linha=mysql_fetch_array($resultado);
$coditem=$linha["coditem"];
                             */
$sql="delete from item where coditem=$coditem";
mysql_query($sql) or die ("Erro ao excluir os dados".mysql_error());

header("location:carrinho2.php");
?>
</body>
</html>
