<HTML>
<HEAD>
 <TITLE>Produto Selecionado</TITLE>
</HEAD>
<BODY>
<?php


include("conexao.php");

$codprod=$_GET["codprod"]; /* valor enviado atraves do link*/
$coditem=$_GET["coditem"];
$qtitem=$_GET["qtitem"];

$sql="select* from produto where codprod='$codprod'";
$resultado=mysql_query($sql) or die ("Problema de consulta");
$linha=mysql_fetch_array($resultado);

$codprod=$linha["codprod"];
$nomeprod=$linha["nomeprod"];
$qtprod=$linha["qtprod"];
$valorprod=$linha["valorprod"];
// $fotoprod=$linha["fotoprod"];



?>

<h1><font color="0000gg"><center></center></font></h1>

<form method="POST" action="atualizar_item.php">

<input type="hidden" name="coditem" value="<?php echo $coditem ?>" readonly="readonly">
<table width="329" border="0" align="center">
        <tr align="center">
                <td colspan="2"><strong><font color="0000ff" size="+2">Produto Selecionado</font></strong></td>
        </tr>
        <tr>
                <td width="122">Nome:</td>
                <td width="151"> <input type="text" name="nomeprod" value="<?php echo $nomeprod ?>" readonly="readonly"></td>
        </tr>
        <tr>
                <td>Valor:</td>
                <td> <input type="text" name="valorprod" value="<?php echo $valorprod ?>" readonly="readonly"></td>
        </tr>
        <tr>
                <td>Quantidade de itens:</td>
                <td> <input type="text" name="qtprod"></td>
        </tr>
        <tr align="center">
                <td colspan="2"> <input type="submit" value="Adicionar ao carrinho"></td>
        </tr>
        
        </table>
        </form>
</BODY>
</HTML>
