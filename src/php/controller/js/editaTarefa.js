//Função que executa um get para o arquivo php
function editaTarefa(codigo){
  var cod = codigo;
  if (cod != null || cod != Undefined) {
  $('#modal-edicao').modal('toggle');
};
}
  //$.get("../controller/editar.php", { codigo : cod });