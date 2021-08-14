<HTML>
<HEAD>
<TITLE>Cadastro do Produto</TITLE>
</HEAD>
<BODY>
<?php
     mysql_connect("localhost", "root", "") or die ("Problema de conexão com o banco de dados");
     mysql_select_db("mercado_edvaldo") or die ("Problema ao selecionar o banco de dados");
     
     $nomeprod=$_POST["nome"];
     $qtprod=$_POST["qt"];
     $valorprod=$_POST["valor"];
     $codfornprod=$_POST["codigo"];
     
     if($nomeprod==""){
                       echo "Campo Obrigatório<br>";
                       echo "<a href=cadprod.htm> voltar para cadastro</a>";
                       exit;
     }
     $sql="insert into produto(nomeprod, qtprod, valorprod, codfornprod)
     values ('$nomeprod', '$qtprod', '$valorprod', '$codfornprod')";
     mysql_query($sql) or die ("problema do cadastro dos dados". $sql);
                       echo "Dados Cadastrados com Sucesso";
                       
?>
<br/>
<a href="sistema_cadastro.php">Inicio</a>
<br/>
<a href="cadprod.htm">Continuar Cadastrando</a>
</BODY>
</HTML>

