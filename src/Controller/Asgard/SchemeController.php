<?php

namespace App\Controller\Asgard;

use App\Controller\Asgard\AppController;

class SchemeController extends AppController
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
            $where[] = ['Scheme.' . $filter . ' LIKE' => '%' . $search . '%'];
        }

        $this->paginate = [  //before it was `public` outside of the function
            'limit' => 10,
            'order' => [
                'Scheme.name' => 'asc'
            ],
            'conditions' => $where
        ];
        $details = $this->Scheme->find('all');
        $this->set('data', $this->paginate($details));
        $this->set('filter', $filter);
        $this->set('search', $search);
    }

    // ADD
    public function add()
    {
        $this->viewBuilder()->setLayout('backend_main');
        

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if (empty($data['image_value']['tmp_name'])) {
                unset($data['image_value']);
            }

            if ($this->Query->setData('Scheme', $data)) {
                $this->Flash->set('Scheme ' . $data['name'] . ' has been added.', [
                    'element' => 'success'
                ]);

                return $this->redirect(array('controller' => 'Scheme', 'action' => 'index'));
            } else {
                $this->Flash->set('Oops! Something went wrong. Please try again later.', [
                    'element' => 'error'
                ]);
                return $this->redirect(array('controller' => 'Scheme', 'action' => 'add'));
            }
        }
        $this->set('page_title', 'Add Scheme');
    }

    //   EDIT
    public function edit($id = null)
    {
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Scheme', 'action' => 'index'));
        }

        $this->viewBuilder()->setLayout('backend_main');
        
                
        $data = $this->Query->getAllDataById('Scheme', ['Scheme.id' => $id]);
        if (isset($data['id'])) {
            $this->set('data', $data);
        } else {
            $this->Flash->error('Oops! Scheme not found.');
            return $this->redirect(array('controller' => 'Scheme', 'action' => 'index'));
        }

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if (empty($data['image_value']['tmp_name'])) {
                unset($data['image_value']);
            }

            $data['id'] = $id;
            if ($this->Query->setData('Scheme',  $data)) {
                $this->Flash->success('Scheme ' . $data['name'] .  ' has been edited.');
                return $this->redirect(array('controller' => 'Scheme', 'action' => 'index', $id));
            } else {
                $this->Flash->error('Oops! Something went wrong. Please try again later.');
                return $this->redirect(array('controller' => 'Scheme', 'action' => 'edit', $id));
            }
        }

        $this->set('page_title', 'Edit Scheme');
    }

    // VIEW

    public function view($id = null)
    {
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Scheme', 'action' => 'index'));
        }
        $this->viewBuilder()->setLayout('backend_main');
        

        $data = $this->Query->getAllDataById('Scheme', ['Scheme.id' => $id]);
        if (isset($data['id'])) {
            $this->set('data', $data);
        } else {
            $this->Flash->error('Oops! Scheme not found.');
            return $this->redirect(array('controller' => 'Scheme', 'action' => 'index'));
        }
    }

    // DELETE

    public function delete($id = null)
    {
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Scheme', 'action' => 'index'));
        }
        // 

        $data = $this->Query->getAllDataById('Scheme', ['Scheme.id' => $id]);
        if (isset($data['id'])) {
            $this->set('data', $data);
        } else {
            $this->Flash->error('Oops! Scheme not found.');
            return $this->redirect(array('controller' => 'Scheme', 'action' => 'index'));
        }

        if ($this->Query->removeData('Scheme', ['Scheme.id' => $id])) {
            $this->Flash->success('Scheme ' . $data['first_name'] . ' has been deleted.');
        } else {
            $this->Flash->error('Oops! Something went wrong. Please try again later.');
        }
        return $this->redirect(array('controller' => 'Scheme', 'action' => 'index'));
    }
}
