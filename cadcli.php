<HTML>
<HEAD>
<TITLE>Cadastro Cliente</TITLE>
</HEAD>
<BODY>
<?php
     mysql_connect("localhost", "root", "") or die ("Problema de conexão com o banco de dados");//Conecta com o Servido Usuario e Senha
     mysql_select_db("mercado_edvaldo") or die("Problema ao selecionaro o banco de dados");
     
     $nomecli=$_POST["nome"]; // a Variável POST igual como na camada visual
     $endcli=$_POST["end"];
     $telcli=$_POST["tel"];
     $celcli=$_POST["cel"];
     $cpfcli=$_POST["cpf"];
     $usucli=$_POST["usuario"];
     $senhacli=$_POST["senha"];
     
     if($nomecli==""){
                      echo "Campo Obrigatório<br>";
                      echo "<a href=cadcli.htm> voltar para cadastro</a>";
                      exit;
     }
     $sql="insert into cliente(nomecli, endcli, telcli, celcli, cpfcli, usucli, senhacli)
     values ('$nomecli', '$endcli', '$telcli', '$celcli', '$cpfcli', '$usucli', '$senhacli')";
     mysql_query($sql) or die("Problema no cadastro dos dados" .$sql);  //Executa o SQl no banco de dados, CRUD
                       echo "Dados Cadastrados com sucesso";
     ?>
     <br/>
     <a href="sistema_cadastro.php">Inicio</a>
     <br/>
     <a href="cadcli.htm">Continuar Cadastrando</a>
     </BODY>
     </HTML>
     
