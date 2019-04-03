<?php

 include '../controller/conexao.php';
 $executa = "select *,date_format(`data`,'%d/%m/%Y') as `data_formatada` from `agenda`";
 $query = $mysqli->query($executa);
 include 'head.php';
?>
<div class="content">  
  <div class="task-table">  
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Tarefa</th>
          <th scope="col">Opção</th>
        </tr>
      </thead>
      <tbody>
          <?php
          while ($dados=mysqli_fetch_object($query)) {
            $cod = $dados->codigo;
            echo "<tr>";
            echo "<th scope='row'>".$dados->data_formatada ."</th>";
            echo "<td>".$dados->tarefa ."</td>";
            echo "<td>
                    <rowspan>
                      <a class='btn btn-warning' value='Editar'
                       href='editar.php?codigo=$cod' >
                       Editar
                      </a>
                    </rowspan>
                  </td>";
            echo "<td>
                    <rowspan>
                      <a class='btn btn-danger' onclick='excluiTarefa($cod)' >
                       Excluir
                      </a>
                    </rowspan>
                  </td>";                
            echo "</tr>";
            }
            $query->free();
           ?>            
      </tbody>
    </table>
    <input type="button" class="btn btn-primary btn-lg btn-block" value="Adicionar Nova" data-toggle="modal" data-target="#modal-nova-tarefa" />
  </div>
</div>  
  
<?php
 include 'modal-nova-tarefa.php';
 include 'footer.php';
?>