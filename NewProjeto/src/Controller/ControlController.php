<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Controller\Component\FlashComponent;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Datasource\ConnectionManager;


class ControlController extends AppController{


    ///////////// PRODUTOS ///////////////
    public function index(){

        $connection = ConnectionManager::get('default');

        $sql = "SELECT * FROM produtos";
        $Produtos = $connection->execute($sql)->fetchAll('assoc');

        $this->set(compact('Produtos'));
        $this->set('_serialize',['Produtos']);
    }

    public function addproduct(){}

    public function insertproduct(){

        $connection = ConnectionManager::get('default');

        $sql = " INSERT INTO produtos
                  (produto)
                VALUES
                  ('{$this->request['data']['Product']}')";
        $connection->execute($sql);            

        $this->Flash->success(__('Produto adicionado com sucesso !'));
        return $this->redirect(['action' => 'index']);
    }

    public function editproduct($id){

        $connection = ConnectionManager::get('default');

        $sql = "SELECT * FROM produtos
                WHERE id = '$id'";
        $Produtos = $connection->execute($sql)->fetchAll('assoc');

        $this->set(compact('Produtos','id'));
        $this->set('_serialize',['Produtos','id']);
    }

    public function updateproduct(){

      $connection = ConnectionManager::get('default');

      $Id = $this->request->data['id'];

      $sql = "UPDATE produtos
              set produto = '{$this->request['data']['Product']}'
              where id = '$Id'";
      $connection->execute($sql);

      $this->Flash->success(__('Produto adicionado com sucesso !'));
      return $this->redirect(['action' => 'index']);

      $this->set(compact('Id'));
      $this->set('_serialize',['Id']);
    }

    public function deleteproduct($id){

        $connection = ConnectionManager::get('default');

        $sql ="DELETE FROM produtos
               WHERE id = '$id'";
        $connection->execute($sql);

        $this->Flash->success(__('Produto excluido com sucesso !!'));
        return $this->redirect(['action' => 'index']);

        $this->set(compact('id'));
        $this->set('_serialize',['id']);
    }
    //////////////////////////////////////

}
?>