<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Translations Controller
 *
 * @property \App\Model\Table\TranslationsTable $Translations
 */
class TranslationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Languages', 'Sources']
        ];
        $this->set('translations', $this->paginate($this->Translations));
        $this->set('_serialize', ['translations']);
    }

    /**
     * View method
     *
     * @param string|null $id Translation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $translation = $this->Translations->get($id, [
            'contain' => ['Users', 'Languages', 'Sources', 'Scorings', 'TranslationRequests']
        ]);
        $this->set('translation', $translation);
        $this->set('_serialize', ['translation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $translation = $this->Translations->newEntity();
        if ($this->request->is('post')) {
            $translation = $this->Translations->patchEntity($translation, $this->request->data);
            if ($this->Translations->save($translation)) {
                $this->Flash->success(__('The translation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The translation could not be saved. Please, try again.'));
            }
        }
        $users = $this->Translations->Users->find('list', ['limit' => 200]);
        $languages = $this->Translations->Languages->find('list', ['limit' => 200]);
        $sources = $this->Translations->Sources->find('list', ['limit' => 200]);
        $this->set(compact('translation', 'users', 'languages', 'sources'));
        $this->set('_serialize', ['translation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Translation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $translation = $this->Translations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $translation = $this->Translations->patchEntity($translation, $this->request->data);
            if ($this->Translations->save($translation)) {
                $this->Flash->success(__('The translation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The translation could not be saved. Please, try again.'));
            }
        }
        $users = $this->Translations->Users->find('list', ['limit' => 200]);
        $languages = $this->Translations->Languages->find('list', ['limit' => 200]);
        $sources = $this->Translations->Sources->find('list', ['limit' => 200]);
        $this->set(compact('translation', 'users', 'languages', 'sources'));
        $this->set('_serialize', ['translation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Translation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $translation = $this->Translations->get($id);
        if ($this->Translations->delete($translation)) {
            $this->Flash->success(__('The translation has been deleted.'));
        } else {
            $this->Flash->error(__('The translation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
