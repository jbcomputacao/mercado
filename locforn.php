<html>
<head>
 <title>Localização de Fornecedores</title>
</head>
<body>
<?php
include("conexao.php");
$cnpjforn=$_POST["cnpj"];
$sql="select* from fornecedor where cnpjforn='$cnpjforn'";
$rs=mysql_query($sql) or die("CNPJ não Cadastrado:".$sql);
$linha=mysql_fetch_array($rs);

$codforn=$linha["codforn"];
$nomeforn=$linha["nomeforn"];
$endforn=$linha["endforn"];
$cnpjforn=$linha["cnpjforn"];
?>

<form method="post" action="movforn.php" name="form">
<table width="500" border="0">
  <tr>
  <td colspan="2"> <input type="hidden" name="codforn" value="<?php echo $codforn;?>"></td>
  </tr>
  <tr>
  <td>Nome:</td>
  <td><input type="text" name="nomeforn" value="<?php echo $nomeforn;?>"></td>
  </tr>
  <tr>
  <td>Endere&ccedil;o:</td>
  <td> <input type="text" name="endforn"  value="<?php echo $endforn;?>"></td>
  </tr>
  <tr>
  <td>CNPJ:</td>
  <td><input type="text" name="cnpjforn" value="<?php echo $cnpjforn;?>"></td>
  </tr>
  <tr>
  <td><input type="submit" name="botao" value="atualizar"></td>
    <td> <input type= "submit" name="botao" value="excluir"></td>
    </tr>
</table>
    <a href="cnpjforn.htm">Proxima localização </a>
    </form>
</body>
</html>
