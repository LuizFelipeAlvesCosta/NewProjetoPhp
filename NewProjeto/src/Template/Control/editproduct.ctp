<section class="content">
  <div class="row">

    <div class="col-md-7">
      <div class="box box-success">
        <div class="box-body">
          <div class="externalDocuments form large-9 medium-8 columns content">
                      
              <legend align="center"><?= __('Adicionar Produtos') ?></legend>

              <div align="left">
                <?= $this->Html->link(__('Voltar'), 
                    array('controller'=>'Control','action'=>'index'), 
                    array('class' => 'btn btn-warning btn-xs', 'escape' => false, 
                    'data-toggle'=>'tooltip', 'title' => 'Voltar para a listagem'));
                ?>
              </div>
                          
                    <?php                                         
                      $session = new \Cake\Network\Session;
                      $user = $session->read('Auth.User');

                      $x = null;

                      echo $this->Form->create($x,['url' => ['controller' => 'Control','action' => 'updateproduct']]);
                      echo $this->Form->input('id',['id' => 'id','label' => 'Ids*','value'=>$id,'type'=>'hidden'])
                    ?>  
                      <br>
                      <table id="example2" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
                          <thead>       
                              <?php foreach ($Produtos as $value):?>
                              <tr>
                                  <td align="center">
                                   <?= $this->Form->input('Product',['id' => 'Product','label' => 'Nome do Produto*',
                                       'value'=>$value['produto']]);?>
                                  </td>
                              </tr>
                              <?php endforeach; ?>
                          </thead> 
                      </table>
                      <br>

                      <div align="center">
                          <button class="btn btn-success" type="submit">
                                   <?= __('Salvar');?>   
                          </button>
                      </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>