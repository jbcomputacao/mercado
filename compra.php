<html>
<head>
<title>Compra</title>
</head>
<body>
<?php
include("conexao.php");

$codcli=$_COOKIE["codcli"];
$codped=$_COOKIE["codped"];
$valortotal=$_POST["valortotal"];
$data=date("Y-m-d");

$sql="insert into compra values (null, '$data', '$codped', '$valortotal')"; //cadastro na tabela compra

mysql_query($sql) or die ("Erro na inserção de dados"); //executa a instrução acima de inserção dos dados na tab_compra or acusa erro
$sql="update pedido set pedido_fechado=1 where codped='$codped'";// Atualiza o estado do pedido_fechado de 0(aberto) para 1 (fechado). Finaliza compra do cliente.
mysql_query($sql)or die ("Compra não foi atualizada");
$sql="select* from item, produto, pedido where codproditem= codprod and codpeditem=codped and codped='$codped'";
$resultado=mysql_query($sql) or die ("ERRO");

while($linha=mysql_fetch_array($resultado)){
       $qtprod=$linha["qtitem"];
       $codprod=$linha["codproditem"];
       $sqldiminuir="update produto set qtprod=(qtprod-$qtprod) where codprod='$codprod'";//Diminuir a qtd de produtos no estoque
       
       mysql_query($sqldiminuir) or die ($sqldiminuir);
       }
       header("location:index.php");
       exit;
       ?>
       </body>
       </html>

