<?php
namespace TctTwitterSource\Controller;

use TctTwitterSource\Controller\AppController;

/**
 * TwitterQueries Controller
 *
 * @property \TctTwitterSource\Model\Table\TwitterQueriesTable $TwitterQueries
 */
class TwitterQueriesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('twitterQueries', $this->paginate($this->TwitterQueries));
        $this->set('_serialize', ['twitterQueries']);
    }

    /**
     * View method
     *
     * @param string|null $id Twitter Query id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $twitterQuery = $this->TwitterQueries->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('twitterQuery', $twitterQuery);
        $this->set('_serialize', ['twitterQuery']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $twitterQuery = $this->TwitterQueries->newEntity();
        if ($this->request->is('post')) {
            $twitterQuery = $this->TwitterQueries->patchEntity($twitterQuery, $this->request->data);
            if ($this->TwitterQueries->save($twitterQuery)) {
                $this->Flash->success(__('The twitter query has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The twitter query could not be saved. Please, try again.'));
            }
        }
        $users = $this->TwitterQueries->Users->find('list', ['limit' => 200]);
        $this->set(compact('twitterQuery', 'users'));
        $this->set('_serialize', ['twitterQuery']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Twitter Query id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $twitterQuery = $this->TwitterQueries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $twitterQuery = $this->TwitterQueries->patchEntity($twitterQuery, $this->request->data);
            if ($this->TwitterQueries->save($twitterQuery)) {
                $this->Flash->success(__('The twitter query has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The twitter query could not be saved. Please, try again.'));
            }
        }
        $users = $this->TwitterQueries->Users->find('list', ['limit' => 200]);
        $this->set(compact('twitterQuery', 'users'));
        $this->set('_serialize', ['twitterQuery']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Twitter Query id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $twitterQuery = $this->TwitterQueries->get($id);
        if ($this->TwitterQueries->delete($twitterQuery)) {
            $this->Flash->success(__('The twitter query has been deleted.'));
        } else {
            $this->Flash->error(__('The twitter query could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
