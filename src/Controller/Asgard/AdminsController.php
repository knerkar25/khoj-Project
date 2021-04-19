<?php

namespace App\Controller\Asgard;

use App\Controller\Asgard\AppController;

class AdminsController extends AppController
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
        $this->loadModel('Users');
        $where = [];
        $filter = $this->request->getQuery('filter');
        $search = $this->request->getQuery('search');
        if (isset($filter) && !empty($filter)) {
            $where[] = ['Users.' . $filter . ' LIKE' => '%' . $search . '%'];
        }
        $this->paginate = [  //before it was `public` outside of the function
            'limit' => 10,
            'order' => [
                'Users.first_name' => 'asc'
            ],
            'conditions' => $where,
        ];
        // $details = $this->Admins->find('all');
        $details = $this->Users->find()->where(['Users.role' => 'DIRECTOR']);
        $this->set('data', $this->paginate($details));
        $this->set('filter', $filter);
        $this->set('search', $search);
    }

    //ADD
    public function add()
    {
        $this->viewBuilder()->setLayout('backend_main');
        $this->loadModel('Users');
        if ($this->request->is('post')) {
            $data = $this->request->getData();


            if ($data['password'] != $data['rpassword']) {
                $this->Flash->set('Your password and retype password is not matched.', [
                    'element' => 'error'
                ]);
                return $this->redirect(array('controller' => 'Admins', 'action' => 'add'));
            }
            $checkUsername = $this->Users->find()->where(['Users.username' => $data['username']]);
            if ($checkUsername->count() > 0) {
                $this->Flash->set('Oops! Username is already exists.', [
                    'element' => 'error'
                ]);
                return $this->redirect(array('controller' => 'Admins', 'action' => 'add'));
            }
           
            if ($this->Query->setData('Users', $data)) {
                $this->Flash->set('Admin ' . $data['first_name'] . ' '  . $data['last_name'] . ' has been added.', [
                    'element' => 'success'
                ]);
                return $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
            } else {
                $this->Flash->set('Oops! Something went wrong. Please try again later.', [
                    'element' => 'error'
                ]);
                return $this->redirect(array('controller' => 'Admins', 'action' => 'add'));
            }
        }
        $this->set('page_title', 'Add Admins');
    }

    //DELETE
    public function delete($id = null)
    {
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
        }
        $data = $this->Query->getAllDataById('Users', ['Users.id' => $id]);
        if (isset($data['id'])) {
            $this->set('data', $data);
        } else {
            $this->Flash->error('Oops! Admin not found.');
            return $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
        }
        if ($this->Query->removeData('Users', ['Users.id' => $id])) {
            $this->Flash->success('Admin ' . $data['first_name'] . ' ' .  $data['last_name'] . ' has been deleted.');
        } else {
            $this->Flash->error('Oops! Something went wrong. Please try again later.');
        }
        return $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
    }

    //EDIT
    public function edit($id = null)
    {
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
        }
        $this->viewBuilder()->setLayout('backend_main');
        $data = $this->Query->getAllDataById('Users', ['Users.id' => $id]);
        if (isset($data['id'])) {
            $this->set('data', $data);
        } else {
            $this->Flash->error('Oops! Admin not found.');
            return $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
        }
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if (trim($data['password']) != trim($data['rpassword'])) {
                $this->Flash->error('Oops! Both password must be same or just leave it blank.');
                return $this->redirect(array('controller' => 'admins', 'action' => 'edit', $id));
            }
         
            $data['id'] = $id;
            unset($data['rpassword']);
            if (trim($data['password']) < 2  || trim($data['password']) === '') {
                unset($data['password']);
            }


            // $data['id'] = $id;
            if ($this->Query->setData('Users',  $data)) {
                $this->Flash->success('Admin ' . $data['first_name'] . ' '  . $data['last_name'] .  ' has been edited.');
                return $this->redirect(array('controller' => 'Admins', 'action' => 'index', $id));
            } else {
                $this->Flash->error('Oops! Something went wrong. Please try again later.');
                return $this->redirect(array('controller' => 'Admins', 'action' => 'edit', $id));
            }
        }
        $this->set('page_title', 'Edit Admins');
    }

    //VIEW
    public function view($id = null)
    {
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
        }
        $this->viewBuilder()->setLayout('backend_main');
        $data = $this->Query->getAllDataById('Users', ['Users.id' => $id]);
        if (isset($data['id'])) {
            $this->set('data', $data);
        } else {
            $this->Flash->error('Oops! Admin not found.');
            return $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
        }
    }
}
