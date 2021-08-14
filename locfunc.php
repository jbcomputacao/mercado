<html>
<head>
 <title>Localização de Funcionarios</title>
</head>
<body>
<?php
include("conexao.php");
$cpffunc=$_POST["cpf"];
$sql="select* from funcionario where cpffunc='$cpffunc'";
$rs=mysql_query($sql) or die("CPF não cadastrado:".$sql);
$linha=mysql_fetch_array($rs);

$codfunc=$linha["codfunc"];
$nomefunc=$linha["nomefunc"];
$endfunc=$linha["endfunc"];
$telfunc=$linha["telfunc"];
$celfunc=$linha["celfunc"];
$cpffunc=$linha["cpffunc"];
$usufunc=$linha["usufunc"];
$senhafunc=$linha["senhafunc"];
?>

<form method="post" action="movfunc.php" name="form">
<table width="500" border="0">
  <tr>
  <td colspan="2"> <input type="hidden" name="codfunc" value="<?php echo $codfunc;?>"></td>
  </tr>
  <tr>
  <td>Nome:</td>
  <td><input type="text" name="nomefunc" value="<?php echo $nomefunc;?>"></td>
  </tr>
  <tr>
  <td>Endere&ccedil;o:</td>
  <td> <input type="text" name="endfunc"  value="<?php echo $endfunc;?>"></td>
  </tr>
  <tr>
  <td>Telefone:</td>
  <td><input type="text" name="telfunc" value="<?php echo $telfunc;?>"></td>
  </tr>
  <tr>
  <td>Celular:</td>
  <td><input type="text" name="celfunc" value="<?php echo $celfunc;?>"></td>
  </tr>
  <tr>
  <td>CPF:</td>
  <td><input type="text" name="cpffunc" value="<?php echo $cpffunc;?>"></td>
  </tr>
  <tr>
  <td>Usuario:</td>
  <td><input type="text" name="usufunc" value="<?php echo $usufunc;?>"></td>
  </tr>
  <tr>
  <td>Senha:</td>
  <td><input type="password" name="senhafunc" value="<?php echo $senhafunc;?>"></td>
  </tr>
  <tr>
  <td><input type="submit" name="botao" value="atualizar"></td>
    <td> <input type= "submit" name="botao" value="excluir"></td>
    </tr>
    </table>
    <a href="locfunc.htm">Proxima localização </a>
    </form>
</body>
</html>
