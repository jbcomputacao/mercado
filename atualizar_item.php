<html>
<head>
<title>Excluir</title>
</head>
<body>
<?php
include("conexao.php");
$qtitem=$_POST["qtitem"];
                        /*
$sql="update* from item where coditem='$coditem'";
$resultado=mysql_query($sql) or die ("Problema na Consulta");
$linha=mysql_fetch_array($resultado);
$coditem=$linha["coditem"];
                             */
$sql="update* from item where qtitem=$qtitem";
mysql_query($sql) or die ("Erro ao atualizar dados".mysql_error());

header("location:carrinho2.php");
?>
</body>
</html>
