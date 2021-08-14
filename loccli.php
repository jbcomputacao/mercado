<html>
<head>
 <title>Localização Clientes</title>
</head>
<body>
<?php
include("conexao.php");
$cpfcli=$_POST["cpf"];
$sql="select* from cliente where cpfcli='$cpfcli'";
$rs=mysql_query($sql) or die("CPF não cadastrado:".$sql);
$linha=mysql_fetch_array($rs);

$codcli=$linha["codcli"];
$nomecli=$linha["nomecli"];
$endcli=$linha["endcli"];
$telcli=$linha["telcli"];
$celcli=$linha["celcli"];
$cpfcli=$linha["cpfcli"];
$usucli=$linha["usucli"];
$senhacli=$linha["senhacli"];
?>

<form method="post" action="movcli.php" name="form">
<table width="500" border="0">
  <tr>
  <td colspan="2"> <input type="hidden" name="codcli" value="<?php echo $codcli;?>"></td>
  </tr>
  <tr>
  <td>Nome:</td>
  <td><input type="text" name="nomecli" value="<?php echo $nomecli;?>"></td>
  </tr>
  <tr>
  <td>Endere&ccedil;o:</td>
  <td> <input type="text" name="endcli"  value="<?php echo $endcli;?>"></td>
  </tr>
  <tr>
  <td>Telefone:</td>
  <td><input type="text" name="telcli" value="<?php echo $telcli;?>"></td>
  </tr>
  <tr>
  <td>Celular:</td>
  <td><input type="text" name="celcli" value="<?php echo $celcli;?>"></td>
  </tr>
  <tr>
  <td>CPF:</td>
  <td><input type="text" name="cpfcli" value="<?php echo $cpfcli;?>"></td>
  </tr>
  <tr>
  <td>Usuario:</td>
  <td><input type="text" name="usucli" value="<?php echo $usucli;?>"></td>
  </tr>
  <tr>
  <td>Senha:</td>
  <td><input type="password" name="senhacli" value="<?php echo $senhacli;?>"></td>
  </tr>
  <tr>
  <td><input type="submit" name="botao" value="atualizar"></td>
    <td> <input type= "submit" name="botao" value="excluir"></td>
    </tr>
    </table>
    <a href="loccli.htm">Proxima localização </a>
    </form>
</body>
</html>
