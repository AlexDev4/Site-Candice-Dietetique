<?php

namespace App\Controller\Backoffice;

use App\Controller\AppController;
use Cake\Event\EventInterface;
use App\Model\Entity\User;

class UsersController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    public function login()
    {      
        $this->viewBuilder()->setLayout('connexion');
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            return $this->redirect('/backoffice/dashboard');
        }
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Votre identifiant ou votre mot de passe est incorrect.'));
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect('/');
        }
    }
}
