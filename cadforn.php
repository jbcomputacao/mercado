<HTML>
<HEAD>
<TITLE>Cadastro do Fornecedor></TITLE>
</HEAD>
<BODY>
<?php
     mysql_connect("localhost", "root", "") or die ("Problema de conex�o com o banco de dados"); //Conecta com o Servi�o Usuarios e Senha
     mysql_select_db("mercado_edvaldo") or die (" Problema ao selecioar o banco de dados");
     
     $nomeforn=$_POST["nome"]; //A vari�vel POST igual como na camada visual
     $endforn=$_POST["end"];
     $cnpjforn=$_POST["cnpj"];
     
     if ($nomeforn==""){
                        echo "Campo Obrigat�rio<br>";
                        echo "<a href=cadforn.htm> Voltar para cadastro</a>";
                        exit;
     }
     $sql="insert into fornecedor(nomeforn, endforn, cnpjforn)
     values ('$nomeforn', '$endforn', '$cnpjforn')";
     mysql_query($sql) or die ("Problema no cadastro dos dados" .$sql); //Executa o SQL no banco de dados, CRUD
                       echo "Dados Cadastrados com Sucesso";
     ?>
     <br/>
     <a href="sistema_cadastro.php">Inicio</a>
     <br/>
     <a href="cadforn.htm">Continuar Cadastrando</a>
     </BODY>
     </HTML>

