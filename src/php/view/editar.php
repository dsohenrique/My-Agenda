<?php 
 include 'head.php';

 include '../controller/conexao.php';

 $codigo = $_GET["codigo"];

 $executa = "select * from agenda where codigo = $codigo";

 $query = $mysqli->query($executa);

 while ($dados=mysqli_fetch_object($query)) {
	$tarefa  =$dados->tarefa ;
 }

$query->free();
echo "<div class='task-card'>";
echo"<form class='card' method='POST' action='../controller/editar.php?codigo=$codigo'>";
echo"<div class='card-header'>Editar Tarefa</div>";
echo"<div class='card-body'>";
echo"<input class='form-control' type='date' name='txtData' required='true' /><br>";
echo"<input class='form-control' type='text' name='txtTarefa' required='true' placeholder='$tarefa' /> ";
echo"</div>";
echo"<button type='submit' class='btn btn-primary'>Salvar Alterações</button>";
echo"</form>"; 
echo "</div>";  

include 'footer.php';
?>