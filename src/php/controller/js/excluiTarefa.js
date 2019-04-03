//Função que executa um get para o arquivo php
function excluiTarefa(codigo){
  var cod = codigo;
  $.get( "../controller/excluir.php", { codigo : cod}, function(){
  	document.location.reload();
  });
}