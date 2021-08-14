<?php
include("conexao.php");
?>
<HTML>
<HEAD>
 <TITLE>Lista_produto2</TITLE>
</HEAD>
<BODY>
<h1> <font color="#0000ff"> <center> Lista de Produtos </center></font></h1>
<table align="center">
<tr>
    <td> <font size="2"> <b>Nome:</b> </td>
    <td> <font size="2"> <b>Valor:</b></td>
    <td> <font size="2"> <b>Quantidade:</b> </td>
</tr>
<?php

$sql="select* from produto";
$rs=mysql_query($sql) or die ("Erro na consulta");
$contador=0;
while($linha=mysql_fetch_array($rs))
{
$contador++;
if($contador%2==0)
{
$cor="#009977";
}
else
{
$cor="#ffcc99";
}
$nomeprod=$linha["nomeprod"];
$valorprod=$linha["valorprod"];
$qtprod=$linha["qtprod"];
$codprod=$linha["codprod"];
//$fotoprod=$linha["fotoprod"];

echo
"<tr bgcolor='$cor'>
         <td> <a href='produto_selecionado.php?codprod=$codprod'>$nomeprod</a> </td>
         <td>$valorprod</td>
         <td>$qtprod</td>
";
}
?>
</table>
</BODY>
</HTML>
