<?php

namespace App\Controller;


class HomeController extends AppController
{

 
    public function index()
    {
       
    }
	
	 public function beforeFilter(\Cake\Event\Event $event){
        $this->Auth->allow(['index','addd']);
    }
	
	      public function addd()
    {
        $message = $this->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $this->set(compact('message'));
    }
	
}