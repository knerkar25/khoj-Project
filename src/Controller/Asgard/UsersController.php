<?php

namespace App\Controller\Asgard;

use App\Controller\Asgard\AppController;


class UsersController extends AppController
{
  public $components = ['Query', 'Paginator', 'Special'];

  public function initialize()
  {
    parent::initialize();
    $this->Auth->allow(['login', 'forgot_password', 'reset_password']);
  }

  public function forgot_password()
  {
    $this->viewBuilder()->setLayout('backend_login'); //base_layout
  }

  public function reset_password()
  {
    $this->viewBuilder()->setLayout('backend_login'); //base_layout
  }

  public function logout()
  {
    return $this->redirect($this->Auth->logout());
  }

  /**
   * User Login Method
   * 
   * @author Kartik Nerkar
   */

  public function login()
  {
    $this->viewBuilder()->setLayout("backend_login");

    if (!empty($this->Auth->user())) {
      return $this->redirect($this->Auth->redirectUrl());
    }
    if ($this->request->is('post')) {
      $data = $this->request->getData();
      $user = $this->Auth->identify();
      try {
        if ($user) {
          $this->Auth->setUser($user);

          $this->Flash->success('Logged In Successfully!');
          if ($user['role'] == 'DIRECTOR') {
            return $this->redirect(array('controller' => 'dashboard', 'action' => 'index'));
          } else if ($user['role'] == 'COORDINATOR') {
            return $this->redirect(array('controller' => 'dashboard', 'action' => 'index'));
          } elseif ($user['role'] == 'FIELDMOBILZER') {
            return $this->redirect(array('controller' => 'dashboard', 'action' => 'index'));
          
          } elseif ($user['role'] == 'VILLAGELEADER') {
            return $this->redirect(array('controller' => 'dashboard', 'action' => 'index'));
          }
          return $this->redirect($this->Auth->redirectUrl());
        } else {
          $this->Flash->error('Your username or password is incorrect.');
        }
        //code...
      } catch (\Throwable $th) {
        throw $th;
      }
    }
  }

  private function _accessDenied()
  {
    if ($this->Auth->user('role') != 'SUPER_ADMIN') {
      $this->Flash->error('Oops! You don\'t have permission to access that page.');
      $this->Auth->logout();
      return $this->redirect(array('controller' => 'users', 'action' => 'login'));
    }
  }


  public function change_password()
  {
    $this->viewBuilder()->setLayout('backend_main');

    $user = $this->Auth->user();
    if ($this->request->is('post')) {
      $data = $this->request->getData();

      if (trim($data['password']) != trim($data['rpassword'])) {
        $this->Flash->error('Oops! Both password must be same.');
        return $this->redirect(array('controller' => 'users', 'action' => 'change_password'));
      }

      unset($data['rpassword']);
      $data['id'] = $user['id'];
      if ($this->Query->setData('Users',  $data)) {
        $this->Flash->success('Password has been changed successfully.');
        return $this->redirect(array('controller' => 'Dashboard', 'action' => 'index'));
      } else {
        $this->Flash->error('Oops! Something went wrong. Please try again later.');
        return $this->redirect(array('controller' => 'Users', 'action' => 'change_password'));
      }
    }
    $this->set('page_title', 'Change Password');
  }

  //PROFILE
  public function profile()
  {
    $this->viewBuilder()->setLayout('backend_main');
  }
}
