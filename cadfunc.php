<HTML>
<HEAD>
<TITLE>Cadastro Funcionario</TITLE>
</HEAD>
<BODY>
<?php
     mysql_connect("localhost", "root", "") or die ("Problema de conex�o com o banco de dados");//Conecta com o Servi�o Usuario e Senha
     mysql_select_db("mercado_edvaldo") or die(" Problema ao selecionar o banco de dados");

     $nomefunc=$_POST["nome"]; // A vari�vel POST igual como na camada visual
     $endfunc=$_POST["end"];
     $telfunc=$_POST["tel"];
     $celfunc=$_POST["cel"];
     $cpffunc=$_POST["cpf"];
     $usufunc=$_POST["usuario"];
     $senhafunc=$_POST["senha"];
     
     if($nomefunc==""){
                      echo "Campo Obrigat�rio<br>";
                      echo "<a href=cadfunc.htm> voltar para cadastro</a>";
                      exit;
}
$sql="insert into funcionario(nomefunc, endfunc, telfunc, celfunc, cpffunc, usufunc, senhafunc)
values ('$nomefunc', '$endfunc', '$telfunc', '$celfunc', '$cpffunc', '$usufunc', '$senhafunc')";
mysql_query($sql) or die("Problema no cadastro dos dados" .$sql); //Executa o SQL no banco de dados, CRUD
                  echo "Dados Cadastrados com sucesso";
                  
?>
<br/>
<a href="sistema_cadastro.php">Inicio</a>
<br/>
<a href="cadfunc.htm">Continuar Cadastrando</a>
</BODY>
</HTML>
