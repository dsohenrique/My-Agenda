<?php
include "conexao.php";

$codigo = $_GET["codigo"];
$executa ="delete from agenda where codigo = $codigo";

$query = $mysqli->query($executa);

?>


