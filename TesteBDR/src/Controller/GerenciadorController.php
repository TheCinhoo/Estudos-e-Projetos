<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gerenciador Controller
 *
 * @property \App\Model\Table\GerenciadorTable $Gerenciador
 */
class GerenciadorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index(){

        $gerenciador = $this->paginate($this->Gerenciador);

        $this->set(compact('gerenciador'));
        $this->set('_serialize', ['gerenciador']);


    }

    /**
     * View method
     *
     * @param string|null $id Gerenciador id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gerenciador = $this->Gerenciador->get($id, [
            'contain' => []
        ]);

        $this->set('gerenciador', $gerenciador);
        $this->set('_serialize', ['gerenciador']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()    {
        $gerenciador = $this->Gerenciador->newEntity();
        if ($this->request->is('post')) {
            $gerenciador = $this->Gerenciador->patchEntity($gerenciador, $this->request->getData());
            if ($this->Gerenciador->save($gerenciador)) {
                $this->Flash->success(__('A Tarefa Foi Salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A Tarefa não pode ser salva. Tente novamente.'));
        }
        $this->set(compact('gerenciador'));
        $this->set('_serialize', ['gerenciador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gerenciador id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gerenciador = $this->Gerenciador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gerenciador = $this->Gerenciador->patchEntity($gerenciador, $this->request->getData());
            if ($this->Gerenciador->save($gerenciador)) {
                $this->Flash->success(__('A Tarefa Foi Salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A Tarefa Não Pode Ser Salva, Tente Novamente.'));
        }
        $this->set(compact('gerenciador'));
        $this->set('_serialize', ['gerenciador']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gerenciador id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gerenciador = $this->Gerenciador->get($id);
        if ($this->Gerenciador->delete($gerenciador)) {
            $this->Flash->success(__('A Tarefa Foi Deletada.'));
        } else {
            $this->Flash->error(__('A Tarefa Não Pode Ser Deletada, Tente Novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function fizzbuzz(){
      for ($i=1; $i < 100; $i++) {
        if ($i%3 == 0) {
          echo "Fizz<br />";
          $i++;
        }if ($i%5 == 0) {
          echo "Buzz <br />";
          $i++;
        } else {
          echo "$i <br />";
        }
      }

    }
}
