<?php
session_start();
require '../Banco de Dados/conexao.php';
$idusuario = $_SESSION["logado"];
$total = $_GET["total"];
$comando = "INSERT INTO pedido (total,IDUsuario) VALUES ('$total','$idusuario')";
$retorno = mysqli_query($cnx,$comando);
if ($retorno) {
	echo "<script> alert ('COMPRA FEITA COM SUCESSO')</script>";
	header("refresh:0.1; logado.php");
} else {
	header("location: logado.php");
}


?>