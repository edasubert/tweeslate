<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TranslationRequests Controller
 *
 * @property \App\Model\Table\TranslationRequestsTable $TranslationRequests
 */
class TranslationRequestsController extends AppController
{
    
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Languages', 'Sources', 'Translations']
        ];
        $this->set('translationRequests', $this->paginate($this->TranslationRequests));
        $this->set('_serialize', ['translationRequests']);
    }

    /**
     * View method
     *
     * @param string|null $id Translation Request id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $translationRequest = $this->TranslationRequests->get($id, [
            'contain' => ['Users', 'Languages', 'Sources', 'Translations']
        ]);
        $this->set('translationRequest', $translationRequest);
        $this->set('_serialize', ['translationRequest']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $translationRequest = $this->TranslationRequests->newEntity();
        if ($this->request->is('post')) {
            $translationRequest = $this->TranslationRequests->patchEntity($translationRequest, $this->request->data);
            if ($this->TranslationRequests->save($translationRequest)) {
                $this->Flash->success(__('The translation request has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The translation request could not be saved. Please, try again.'));
            }
        }
        $users = $this->TranslationRequests->Users->find('list', ['limit' => 200]);
        $languages = $this->TranslationRequests->Languages->find('list', ['limit' => 200]);
        $sources = $this->TranslationRequests->Sources->find('list', ['limit' => 200]);
        $translations = $this->TranslationRequests->Translations->find('list', ['limit' => 200]);
        $this->set(compact('translationRequest', 'users', 'languages', 'sources', 'translations'));
        $this->set('_serialize', ['translationRequest']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Translation Request id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $translationRequest = $this->TranslationRequests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $translationRequest = $this->TranslationRequests->patchEntity($translationRequest, $this->request->data);
            if ($this->TranslationRequests->save($translationRequest)) {
                $this->Flash->success(__('The translation request has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The translation request could not be saved. Please, try again.'));
            }
        }
        $users = $this->TranslationRequests->Users->find('list', ['limit' => 200]);
        $languages = $this->TranslationRequests->Languages->find('list', ['limit' => 200]);
        $sources = $this->TranslationRequests->Sources->find('list', ['limit' => 200]);
        $translations = $this->TranslationRequests->Translations->find('list', ['limit' => 200]);
        $this->set(compact('translationRequest', 'users', 'languages', 'sources', 'translations'));
        $this->set('_serialize', ['translationRequest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Translation Request id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $translationRequest = $this->TranslationRequests->get($id);
        if ($this->TranslationRequests->delete($translationRequest)) {
            $this->Flash->success(__('The translation request has been deleted.'));
        } else {
            $this->Flash->error(__('The translation request could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
