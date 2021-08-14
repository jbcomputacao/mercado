<HTML>
<HEAD>
 <TITLE>Lista Cliente Espelho</TITLE>
</HEAD>
<BODY>
<form method="POST" action="lista_cliente_espelho.php">
Nome:<input type="text" name="nome">
<input type="submit" value="Pesquisar">
</form>

<?php
include("conexao.php");  //conexao com o banco de dados
$nome=$_POST["nome"]; //recebe a informação da camada visual
if(isset($nome)){ //verifica se a variável $nome foi preenchida
$sql="select* from cliente where nomecli like '%$nome%'"; //consulta sql
$rs=mysql_query($sql) or die("erro ao selecionar".$sql); //dispara a consulta

while($linha=mysql_fetch_array($rs)){//loop para listar os dados da tabela funcionario
$codcli=$linha["codcli"]; //carrega os valores dos campos da tabela
$nomecli=$linha["nomecli"];
$endcli=$linha["endcli"];
$telcli=$linha["telcli"];
$celcli=$linha["celcli"];
$cpfcli=$linha["cpfcli"];
$usucli=$linha["usucli"];
$senhacli=$linha["senhacli"];
  //mostra os dados na camada
echo"
<table border='5' bgcolor='#00ccf'>

<tr>
    <td>Código:</td><td>$codcli</td>
    <td>Nome:</td><td>$nomecli</td>
</tr>
<tr>
    <td>Endereço:</td><td>$endcli</td>
    <td>Telefone:</td><td>$telcli</td>
</tr>
<tr>
    <td>Celular:</td><td>$celcli</td>
    <td>CPF:</td><td>$cpfcli</td>
</tr>
<tr>
    <td>Usuario:</td><td>$usucli</td>
    <td>Senha:</td><td>$senhacli</td>
</tr>
</table>
<hr>";
}
}
?>
<a href="sistema_cadastro.php">Sistema de Cadastro</a>
</BODY>
</HTML>
