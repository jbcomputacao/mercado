<?php
$sql="select* from funcionario where usufunc='$usuario' and senhafunc='$senha'and cpffunc='$cpf'";
$rs=mysql_query($sql) or die ("Erro no SQL");
$linha = mysql_fetch_array($rs);
$codfunc=$linha["codfunc"];
$nomefunc=$linha["nomefunc"];

if($codfunc=="")
{
               header("location:f_candidato.htm");
}
               else{
                    setcookie("nomefunc",$nomefunc);
                    header("location:sistema_cadastro.php");
                    }
?>

