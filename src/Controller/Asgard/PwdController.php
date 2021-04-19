<?php

namespace App\Controller\Asgard;

use App\Controller\Asgard\AppController;

class PwdController extends AppController
{
    public $components = ['Query', 'Paginator', 'Special'];
    public function initialize()
    {
        parent::initialize();
    }


    //index
    public function index()
    {
        $this->viewBuilder()->setLayout('backend_main');
        

        $where = [];

        $filter = $this->request->getQuery('filter');
        $search = $this->request->getQuery('search');

        if (isset($filter) && !empty($filter)) {
            $where[] = ['Pwd.' . $filter . ' LIKE' => '%' . $search . '%'];
        }

        $this->paginate = [  //before it was `public` outside of the function
            'limit' => 10,
            'order' => [
                'Pwd.name' => 'asc'
            ],
            'conditions' => $where
        ];
        $details = $this->Pwd->find('all');
        $this->set('data', $this->paginate($details));
        $this->set('filter', $filter);
        $this->set('search', $search);
    }

    public function add()
    {
        $this->viewBuilder()->setLayout('backend_main');
        

        if ($this->request->is('post')) {
            $data = $this->request->getData();


            if ($this->Query->setData('Pwd', $data)) {
                $this->Flash->set('Pwd ' . $data['name'] . ' has been added.', [
                    'element' => 'success'
                ]);

                return $this->redirect(array('controller' => 'Pwd', 'action' => 'index'));
            } else {
                $this->Flash->set('Oops! Something went wrong. Please try again later.', [
                    'element' => 'error'
                ]);
                return $this->redirect(array('controller' => 'Pwd', 'action' => 'add'));
            }
        }
        $this->set('page_title', 'Add Pwd');
    }
    public function delete($id = null)
    {
        
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Pwd', 'action' => 'index'));
        }
        $data = $this->Query->getAllDataById('Pwd', ['Pwd.id' => $id]);
        if (isset($data['id'])) {
            $this->set('data', $data);
        } else {
            $this->Flash->error('Oops! Pwd not found.');
            return $this->redirect(array('controller' => 'Pwd', 'action' => 'index'));
        }

        if ($this->Query->removeData('Pwd', ['Pwd.id' => $id])) {
            $this->Flash->success('Pwd ' . $data['name'] . ' has been deleted.');
        } else {
            $this->Flash->error('Oops! Something went wrong. Please try again later.');
        }
        return $this->redirect(array('controller' => 'Pwd', 'action' => 'index'));
    }

    public function edit($id = null)
    {
        
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Pwd', 'action' => 'index'));
        }
        $this->viewBuilder()->setLayout('backend_main');


        $data = $this->Query->getAllDataById('Pwd', ['Pwd.id' => $id]);
        if (isset($data['id'])) {
            $this->set('data', $data);
        } else {
            $this->Flash->error('Oops! Pwd not found.');
            return $this->redirect(array('controller' => 'Pwd', 'action' => 'index'));
        }

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if (empty($data['image_value']['tmp_name'])) {
                unset($data['image_value']);
            }

            $data['id'] = $id;
            if ($this->Query->setData('Pwd',  $data)) {
                $this->Flash->success('Pwd ' . $data['name'] .  ' has been edited.');
                return $this->redirect(array('controller' => 'Pwd', 'action' => 'index', $id));
            } else {
                $this->Flash->error('Oops! Something went wrong. Please try again later.');
                return $this->redirect(array('controller' => 'Pwd', 'action' => 'edit', $id));
            }
        }

        $this->set('page_title', 'Edit Pwd');
    }

    public function view($id = null)
    {
        
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Pwd', 'action' => 'index'));
        }
        $this->viewBuilder()->setLayout('backend_main');
        $data = $this->Query->getAllDataById('Pwd', ['Pwd.id' => $id]);
        if (isset($data['id'])) {
            $this->set('data', $data);
        } else {
            $this->Flash->error('Oops! Pwd not found.');
            return $this->redirect(array('controller' => 'Pwd', 'action' => 'index'));
        }
    }
}
