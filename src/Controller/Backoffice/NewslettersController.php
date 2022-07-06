<?php

namespace App\Controller\Backoffice;

use App\Controller\AppController;

class NewslettersController extends AppController{
    public function index(){
        $this->set('newsletters', $this->Newsletters->find()->order(['created' => 'DESC'])->all());
    }

    public function delete($id){
        $this->Newsletters->deleteAll(['id' => $id]);
        $this->Flash->success('L\'inscription a été supprimée.');
        return $this->redirect($this->referer());
    }
}
