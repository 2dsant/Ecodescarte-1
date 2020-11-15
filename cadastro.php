<?php
include "conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$n_casa = $_POST['n'];


$insert = mysqli_query($connection,"insert into cadastro values ('{$nome}','{$cpf}','{$celular}','{$bairro}','{$cidade}','{$endereco}','{$n_casa}');") or die ("Erro ao realizar os cadastro!");
echo "<center><br><br><h1>Cadastro realizado com sucesso!</h1></center>";
?>
