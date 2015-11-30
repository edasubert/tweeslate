<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserAttributes Controller
 *
 * @property \App\Model\Table\UserAttributesTable $UserAttributes
 */
class UserAttributesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('userAttributes', $this->paginate($this->UserAttributes));
        $this->set('_serialize', ['userAttributes']);
    }

    /**
     * View method
     *
     * @param string|null $id User Attribute id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userAttribute = $this->UserAttributes->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('userAttribute', $userAttribute);
        $this->set('_serialize', ['userAttribute']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userAttribute = $this->UserAttributes->newEntity();
        if ($this->request->is('post')) {
            $userAttribute = $this->UserAttributes->patchEntity($userAttribute, $this->request->data);
            if ($this->UserAttributes->save($userAttribute)) {
                $this->Flash->success(__('The user attribute has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user attribute could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserAttributes->Users->find('list', ['limit' => 200]);
        $this->set(compact('userAttribute', 'users'));
        $this->set('_serialize', ['userAttribute']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Attribute id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userAttribute = $this->UserAttributes->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userAttribute = $this->UserAttributes->patchEntity($userAttribute, $this->request->data);
            if ($this->UserAttributes->save($userAttribute)) {
                $this->Flash->success(__('The user attribute has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user attribute could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserAttributes->Users->find('list', ['limit' => 200]);
        $this->set(compact('userAttribute', 'users'));
        $this->set('_serialize', ['userAttribute']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Attribute id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userAttribute = $this->UserAttributes->get($id);
        if ($this->UserAttributes->delete($userAttribute)) {
            $this->Flash->success(__('The user attribute has been deleted.'));
        } else {
            $this->Flash->error(__('The user attribute could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
