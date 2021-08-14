<HTML>
<HEAD>
 <TITLE>Lista_Produto_Espelho</TITLE>
</HEAD>
<BODY>
 <form method="POST" action="lista_produto_espelho.php">
 Nome:<input type="text" name="nome">
 <input type="submit" value="Pesquisar">
 </form>
 
<?php
include("conexao.php");
$nome=$_POST["nome"];
if(isset($nome)){
           $sql="select* from produto where nomeprod like '%$nome%'";
           $rs=mysql_query($sql) or die ("erro ao selecionar".$sql);

  while($linha=mysql_fetch_array($rs)){
             $codprod=$linha["codprod"];
             $nomeprod=$linha["nomeprod"];
             $valorprod=$linha["valorprod"];
             $qtprod=$linha["qtprod"];
             
             echo"
             <table border='5' bgcolor='#00ccf'>
             
             <tr>
                <td>Codigo:</td><td>$codprod</td>
                <td>Nome:</td><td>$nomeprod</td>
             </tr>
             <tr>
                <td>Valor:</td><td>$valorprod</td>
                <td>Quantidade:</td><td>$qtprod</td>
             </tr>

             </table>
                    <hr>";
             }
             }

?>
<a href="sistema_cadastro.php">Sistema de cadastro</a>
</BODY>
</HTML>
