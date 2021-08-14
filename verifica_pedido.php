<?php

$sql = "select* from pedido where codcliped='$codcli' and pedido_fechado=0";
$rs = mysql_query($sql) or die ("Pedido não foi concluido");
$linha = mysql_fetch_array($rs);

$codped=$linha["codped"];

  if($codped==""){
                  $date = date("d-m-y");
                  $sql="insert into pedido (codcliped,dataped) values ('$codcli', '$date')";
                  mysql_query($sql) or die ("Problema no cadastro do pedido".$sql);
                  
                  $sql = "select *from pedido where codcliped='$codcli' and pedido_fechado=0";
                  $rs = mysql_query($sql) or die ("Não conseguimos localizar nenhum pedido referente a este cliente");
                  $linha=mysql_fetch_array($rs);
                  $codped=$linha["codped"];
  }
  setcookie("codped",$codped);
?>
