<HTML>
<HEAD>
 <TITLE>Lista Funcionario_Espelho</TITLE>
</HEAD>
<BODY>
<form method="POST" action="lista_funcionario_espelho.php">
Nome:<input type="text" name="nome">
<input type="submit" value="Pesquisar">
</form>

<?php
include("conexao.php");  //conexao com o banco de dados
$nome=$_POST["nome"]; //recebe a informação da camada visual
if(isset($nome)){ //verifica se a variável $nome foi preenchida
$sql="select* from funcionario where nomefunc like '%$nome%'"; //consulta sql
$rs=mysql_query($sql) or die("erro ao selecionar".$sql); //dispara a consulta

while($linha=mysql_fetch_array($rs)){//loop para listar os dados da tabela funcionario
$codfunc=$linha["codfunc"]; //carrega os valores dos campos da tabela
$nomefunc=$linha["nomefunc"];
$endfunc=$linha["endfunc"];
$telfunc=$linha["telfunc"];
$celfunc=$linha["celfunc"];
$cpffunc=$linha["cpffunc"];
$usufunc=$linha["usufunc"];
$senhafunc=$linha["senhafunc"];
  //mostra os dados na camada
echo"
<table border='5' bgcolor='#00ccf'>

<tr>
    <td>Código:</td><td>$codfunc</td>
    <td>Nome:</td><td>$nomefunc</td>
</tr>
<tr>
    <td>Endereço:</td><td>$endfunc</td>
    <td>Telefone:</td><td>$telfunc</td>
</tr>
<tr>
    <td>Celular:</td><td>$celfunc</td>
    <td>CPF:</td><td>$cpffunc</td>
</tr>
<tr>
    <td>Usuario:</td><td>$usufunc</td>
    <td>Senha:</td><td>$senhafunc</td>
</tr>
</table>
<hr>";
}
}
?>
<a href="sistema_cadastro.php">Sistema de Cadastro</a>
</BODY>
</HTML>
