<?php ?>

<section class="content">
    <div class="box box-success">
        <div class="box-body">
            <div class="roles form large-9 medium-8 columns content">

                <div align='right'>
                    <?php echo $this->Html->link(__('<i>Adicionar Usuário</i>'), array('action' => 'add'), array('class' => 'btn btn-success btn-xs', 'escape' => false)); ?>
                </div>
                <legend><?= __('Lista de usuários:') ?></legend>
                <div class="box-body" align="center">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                             <th><?= $this->Paginator->sort('id', ['label'=>'Id:']) ?></th>
                             <th><?= $this->Paginator->sort('name', ['label'=>'Nome:']) ?></th>
                             <th><?= $this->Paginator->sort('username', ['label'=>'Usuário:']) ?></th>
                             <th><?= $this->Paginator->sort('status', ['label'=>'Ativo:']) ?></th>
                             <th><?= $this->Paginator->sort('created', ['label'=>'Criado em:']) ?></th>
                             <th><?= $this->Paginator->sort('modified', ['label'=>'Modificado em:']) ?></th>
                                <th class="actions"><?= __('Ações:') ?></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= h($user->name) ?></td>
                                    <td><?= h($user->username) ?></td>
                                    <td><?= h($user->status) ?></td>
                                    <td><?= h($user->created) ?></td>
                                    <td><?= h($user->modified) ?></td>
                                    <td align="center" class="actions">
                                        
            <?php 

                echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), 
                array('action' => 'view', $user->id), 
                array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'
                =>'tooltip', 'title' => 'Visualizar')); 
            ?>

            <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), 
            array('action' => 'edit', $user->id), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>

                                        <?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $user->id), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Deletar', 'confirm' => __('Tem certeza de que deseja excluir # {0}?',$user->id))); ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"></link>

<?php
$this->Html->script(['AdminLTE./plugins/fileSaver/FileSaver.js',], ['block' => 'script']);
$this->Html->script(['AdminLTE./plugins/canvasToBlob/canvas-toBlob.js',], ['block' => 'script']);
$this->Html->script(['AdminLTE./plugins/Chart.js-2.3.0/dist/Chart.js',], ['block' => 'script']);
$this->Html->script(['//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js',], ['block' => 'script']);
?>

<script>
$(document).ready(function(){
    $('#example2').DataTable({
        "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "Nada encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponível",
            "infoFiltered": "(Filtrado de _MAX_ total registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior"
            }
        },"lengthMenu": [ 7, 10, 15 ]
    });
});
</script>
