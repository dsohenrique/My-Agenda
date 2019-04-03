<div class="modal fade" id="modal-nova-tarefa" tabindex="-1" role="dialog" aria-labelledby="nova-tarefa-modal" aria-hidden="true">
  <form method = "POST" action="../controller/nova-tarefa.php">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="nova-tarefa-modal">Nova Tarefa</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
        </div>
        <div class="modal-body">
          <input type="date" class="form-control" name="data" placeholder="Data"
           required="true" /><br>          
          <input type="text" class="form-control" name="tarefa" placeholder="Tarefa" 
          required="true" />          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </div>
  </form>
</div>