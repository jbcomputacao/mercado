<html>
<head>
 <title>Localização de Fornecedores</title>
</head>
<body>
<?php
include("conexao.php");
$codprod=$_POST["cod"];
$sql="select* from produto where codprod='$codprod'";

$rs=mysql_query($sql) or die("Produto não Cadastrado:".$sql);
$linha=mysql_fetch_array($rs);




$codprod=$linha["codprod"];



$nomeprod=$linha["nomeprod"];
$qtprod=$linha["qtprod"];
$valorprod=$linha["valorprod"];
$codfornprod=$linha["codfornprod"];
?>

<form method="post" action="movprod.php" name="form">
<table width="500" border="0">
  <tr>
  <td colspan="2"> <input type="hidden" name="codprod" value="<?php echo $codprod;?>"></td>
  </tr>
  <tr>
  <td>Nome:</td>
  <td><input type="text" name="qtprod" value="<?php echo $qtprod;?>"></td>
  </tr>
  <tr>
  <td>Endere&ccedil;o:</td>
  <td> <input type="text" name="valorprod"  value="<?php echo $valorprod;?>"></td>
  </tr>
  <tr>
  <td>CNPJ:</td>
  <td><input type="text" name="codfornprod" value="<?php echo $codfornprod;?>"></td>
  </tr>
  <tr>
  <td><input type="submit" name="botao" value="atualizar"></td>
    <td> <input type= "submit" name="botao" value="excluir"></td>
    </tr>
</table>
    <a href="locprod.htm">Proxima localização </a>
    </form>
</body>
</html>
