<?php 
include "conexao.php";

$nome =$_POST['nome'];
$email=$_POST['email'];
$texto=$_POST['texto'];    



$insert = mysqli_query($connection,"insert into ecodescart_contato value ('{$nome}','{$email}','{$texto}');")or die ("Youuuu the shitti is with problem motherf");
echo "<script>alert('E-mail enviado com sucesso!');</script>";
echo "<script>window.location = 'contato.html';</script>";



?>