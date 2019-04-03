<?php 

include "conexao.php";

$codigo = $_GET["codigo"];
$data = $_POST["txtData"];
$tarefa = $_POST["txtTarefa"];

 $executa = "update agenda set data = '$data', tarefa = '$tarefa' where codigo = $codigo";


$query = $mysqli->query($executa);

include "../view/head.php";
include "../view/card-sucess.php";
include "../view/footer.php";
?>


