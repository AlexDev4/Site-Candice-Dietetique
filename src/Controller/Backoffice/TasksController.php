<?php

declare(strict_types=1);

namespace App\Controller\Backoffice;

use App\Controller\AppController;

/**
 * Tasks Controller
 *
 * @property \App\Model\Table\TasksTable $Tasks
 * @method \App\Model\Entity\Task[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TasksController extends AppController
{
    public function index()
    {
        $this->set('tasks', $this->Tasks->find()->order(['priority' => 'DESC', 'due_date' => 'ASC'])->all());
    }

    public function view($id = null)
    {
        $task = $this->Tasks->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('task'));
    }


    public function add()
    {
        $task = $this->Tasks->newEmptyEntity();
        if ($this->request->is('post')) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('La tâche a bien été enregistrée.'));

                return $this->redirect('/backoffice/tasks');
            }
            $this->Flash->error(__('L\'opération a rencontré une erreur. Veuillez réessayer.'));
        }
        $this->set(compact('task'));
    }

    public function edit($id = 5)
    {
        $task = $this->Tasks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('Les modifications sont enregistées.'));
                dd('toto');
                return $this->redirect('/backoffice/tasks');
            }
            $this->Flash->error(__('L\'opération a rencontré une erreur. Veuillez réessayer.'));
        }
        $this->set(compact('task'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        /*         $this->request->allowMethod(['post', 'delete']);
 */
        $task = $this->Tasks->get($id);
        if ($this->Tasks->delete($task)) {
            $this->Flash->success(__('La tâche a bien été supprimée'));
        } else {
            $this->Flash->error(__('L\'opération a rencontré une erreur. Veuillez réessayer.'));
        }

        return $this->redirect($this->referer());
    }

    public function done($id = null)
    {
        $task = $this->Tasks->get($id);
        if ($task->done == true) {
            $this->Flash->warning(__('La tâche est déjà terminée.'));
        } else {
            $task->done = true;
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('La tâche est terminée !'));
            } else {
                $this->Flash->error(__('L\'opération a rencontré une erreur. Veuillez réessayer.'));
            }
        }
        return $this->redirect($this->referer());
    }
}
