<HTML>
<HEAD>
 <TITLE>Lista Fornecedor_Espelho</TITLE>
</HEAD>
<BODY>
<form method="POST" action="lista_fornecedor_espelho.php">
Nome:<input type="text" name="nome">
<input type="submit" value="Pesquisar">
</form>

<?php
include("conexao.php");  //conexao com o banco de dados
$nome=$_POST["nome"]; //recebe a informação da camada visual
if(isset($nome)){ //verifica se a variável $nome foi preenchida
$sql="select* from fornecedor where nomeforn like '%$nome%'"; //consulta sql
$rs=mysql_query($sql) or die("erro ao selecionar".$sql); //dispara a consulta

while($linha=mysql_fetch_array($rs)){//loop para listar os dados da tabela funcionario
$codforn=$linha["codforn"]; //carrega os valores dos campos da tabela
$nomeforn=$linha["nomeforn"];
$endforn=$linha["endforn"];
$cnpjforn=$linha["cnpjforn"];
//mostra os dados na camada
echo"
<table border='5' bgcolor='#00ccf'>

<tr>
    <td>Código:</td><td>$codforn</td>
    <td>Nome:</td><td>$nomeforn</td>
</tr>
<tr>
    <td>Endereço:</td><td>$endforn</td>
    <td>Telefone:</td><td>$cnpjforn</td>
</tr>
</table>
<hr>";
}
}
?>
<a href="sistema_cadastro.php">Sistema de Cadastro</a>
</BODY>
</HTML>
