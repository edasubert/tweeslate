<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Scorings Controller
 *
 * @property \App\Model\Table\ScoringsTable $Scorings
 */
class ScoringsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Translations']
        ];
        $this->set('scorings', $this->paginate($this->Scorings));
        $this->set('_serialize', ['scorings']);
    }

    /**
     * View method
     *
     * @param string|null $id Scoring id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scoring = $this->Scorings->get($id, [
            'contain' => ['Users', 'Translations']
        ]);
        $this->set('scoring', $scoring);
        $this->set('_serialize', ['scoring']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scoring = $this->Scorings->newEntity();
        if ($this->request->is('post')) {
            $scoring = $this->Scorings->patchEntity($scoring, $this->request->data);
            if ($this->Scorings->save($scoring)) {
                $this->Flash->success(__('The scoring has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The scoring could not be saved. Please, try again.'));
            }
        }
        $users = $this->Scorings->Users->find('list', ['limit' => 200]);
        $translations = $this->Scorings->Translations->find('list', ['limit' => 200]);
        $this->set(compact('scoring', 'users', 'translations'));
        $this->set('_serialize', ['scoring']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Scoring id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scoring = $this->Scorings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scoring = $this->Scorings->patchEntity($scoring, $this->request->data);
            if ($this->Scorings->save($scoring)) {
                $this->Flash->success(__('The scoring has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The scoring could not be saved. Please, try again.'));
            }
        }
        $users = $this->Scorings->Users->find('list', ['limit' => 200]);
        $translations = $this->Scorings->Translations->find('list', ['limit' => 200]);
        $this->set(compact('scoring', 'users', 'translations'));
        $this->set('_serialize', ['scoring']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Scoring id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $scoring = $this->Scorings->get($id);
        if ($this->Scorings->delete($scoring)) {
            $this->Flash->success(__('The scoring has been deleted.'));
        } else {
            $this->Flash->error(__('The scoring could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
