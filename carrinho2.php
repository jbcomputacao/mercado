<?php
ini_set('display_erros','0');
?>
<HTML>
<HEAD>
 <TITLE>Carrinho</TITLE>
</HEAD>
<BODY>
      <table border="0" colspacing="0" cellpading="0">
      <tr align="center">
      <td>Produto</td>
      <td>Cliente</td>
      <td>Valor unt</td>
      <td>Quantidade</td>
      <td>Atualizar</td>
      <td>Excluir</td>
      </tr>
<?php
include("conexao.php");
$codcli=$_COOKIE["codcli"];
// o cokkie fica ativado na memória do pc
$codped=$_COOKIE["codped"];
// o cookie pega da memoria temporaria e joga na variavel. atribui p varaiavel e joga pro sql


//produto p(é uma alias de tabelas, isto é, p referencia produto nas instruções, ex .:linha 35).
$sql="select* from pedido, item, produto p,cliente
where codcli=codcliped and
p.codprod=codproditem and
codped=codpeditem and
pedido_fechado=0 and
codcli='$codcli'";
//join sql --> junção de sql = consulta de varias tabelas. (linha 32a38).
$resultado=mysql_query($sql) or die ("Problema no carrinho");
$valortotal=0.00;
$contador=0;
While($linha=mysql_fetch_array($resultado)){
$contador++;
if($contador%2==0){
$cor="#0066cc";
}else{
$cor="#ffcc00";
}

$nomeprod=$linha["nomeprod"];
$nomecli=$linha["nomecli"];
$unitario=$linha["valorprod"];
$coditem=$linha["coditem"];
$codcli=$linha["codcli"];
$qtitem=$linha["qtitem"];

$valoritem=$unitario*$qtitem;

//valortotal é um campo calculao; idem $valortotal
$valortotal=$valortotal+$valoritem;

echo"
<tr>
<td bgcolor='$cor'>$nomeprod</td>
<td bgcolor='$cor'>$nomecli</td>
<td bgcolor='$cor'>$unitario</td>
<td bgcolor='$cor'>$qtitem</td>
<td bgcolor='$cor'> <a href='produto_selecionado2.php?coditem=$coditem&qtitem=$qtitem&codprod=$codprod'> Atualizar item </a></td>
<td bgcolor='$cor'> <a href='excluiritem.php?coditem=$coditem'>excluir item </a></td>
</tr>";
}
?>
<form method="POST" action="compra.php">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Código cliente</tr>
<td><input type="text" name="nomecli" value="<?php echo $nomecli; ?>" readonly> </td>
</tr>
<tr>
<td>Nome Cliente</td>
<td><input type="text" name="nomecli" value="<?php echo $nomecli; ?>" readoonly> </td>
</tr>
<tr>
<td>Valor da Compra</td>
<td> <input type="text" name="valortotal" value="<?php echo $valortotal; ?>" readonly> </td>
</tr>
<td>Código do Pedido</td>
<td> <input type="text" name="codped" value="<?php echo $codped; ?>" readonly> </td>
</tr>
<tr>
<td colspan="2"><input type ="submit" value="fechar compra"> </td>
</tr>
</form>
</table>
<p> <a href="lista_produto2.php"> <input name=""type="button" value="Adicionar mais produtos"> </a></p>
</BODY>
</HTML>
