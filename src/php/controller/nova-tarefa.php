<?php 

include "conexao.php";

$data = $_POST["data"];
$tarefa = $_POST["tarefa"];

$executa = "insert into agenda (data, tarefa) value ('$data','$tarefa')";


$query = $mysqli->query($executa);

include "../view/head.php";
include "../view/card-sucess.php";
include "../view/footer.php";
?>