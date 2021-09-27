<section class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="box box-success">
            	
          <legend align="center"><?= __('Lista de Produtos')?></legend>
          
          <br>
          <div align="center">
                  <?= $this->Html->link(__('Adicionar Produtos'), 
                      array('controller'=>'Control','action'=>'addproduct'), 
                      array('class' => 'btn btn-primary btn-xs', 'escape' => false, 
                      'data-toggle'=>'tooltip', 'title' => 'Cadastrar Produtos'));
                  ?>
          </div>
          <br>

          <div class="box-body">
            <div style="overflow: auto;"> 
              <table id="example2" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
              	<thead>
                    <tr>
                        <td align="center"><b>Id</b></td>
                        <td align="center"><b>Produto</b></td>
                        <td align="center"><b><?= __('Ações') ?></b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Produtos as $value):?>
                    <tr>
                        <td align="center"><?= $value['id'] ?></td>
                        <td align="center"><?= $value['produto'] ?></td>
                      	<td align="center">
                            <?= $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), 
                                array('controller'=>'Control','action'=>'editproduct',$value['id']), 
                                array('class' => 'btn btn-warning btn-xs', 'escape' => false, 
                                'data-toggle'=>'tooltip', 'title' => 'Editar Produto'));
                            ?>
                            <?= $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), 
                                array('controller'=>'Control','action'=>'deleteproduct',$value['id']), 
                                array('class' => 'btn btn-danger btn-xs', 'escape' => false, 
                                'data-toggle'=>'tooltip', 'title' => 'Excluir Produto',
                                'confirm' => 'Deseja excluir produto ('.$value['produto'].' ) ?'));
                            ?>
                        </td>
                    </tr>
    	             <?php endforeach; ?>               
                </tbody>
              </table>
            </div>               
          </div>

      </div>
    </div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"></link>

  <?php
    $this->Html->script(['AdminLTE./plugins/fileSaver/FileSaver.js',], ['block' => 'script']);
    $this->Html->script(['AdminLTE./plugins/canvasToBlob/canvas-toBlob.js',],
    ['block' => 'script']);
    $this->Html->script(['AdminLTE./plugins/Chart.js-2.3.0/dist/Chart.js',],
    ['block' => 'script']);
    $this->Html->script(['//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js',],
    ['block' => 'script']);
  ?>

<script>
  $(document).ready(function(){
      $('#example2').DataTable({
          "language": {
              "lengthMenu": " ",
              "zeroRecords": "Nada encontrado",
              "info": "Mostrando página _PAGE_ de _PAGES_",
              "infoEmpty": "Nenhum registro disponível",
              "infoFiltered": "(Filtrado de _MAX_ total registros)",
              "sSearch": "Buscar:",
              "oPaginate": {
                  "sNext": "Próximo",
                  "sPrevious": "Anterior"
              }
          },"lengthMenu": [ 20, 40, 60, 80, 100]
      });
  });
</script>