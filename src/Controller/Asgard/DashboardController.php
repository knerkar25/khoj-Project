<?php

namespace App\Controller\Asgard;

use App\Controller\Asgard\AppController;
// use App\Controller\Api\AppController;

class DashboardController extends AppController
{
  public $components = ['Query', 'Paginator'];

  public function initialize()
  {
    parent::initialize();
    $this->Auth->allow([]);
  }

  public function index()
  {
    $this->viewBuilder()->setLayout('backend_main');

    //Total Number of Directors
    $directors = $this->Query->rawQuery("SELECT COUNT(*) as count FROM users WHERE role = 'DIRECTOR' AND is_active = 1 AND is_deleted = 0");
    $this->set('directors', $directors[0]);

    //Total Number of Co-ordinator
    $coordinators = $this->Query->rawQuery("SELECT COUNT(*) as count FROM users WHERE role = 'COORDINATOR' AND is_active = 1 AND is_deleted = 0");
    $this->set('coordinators', $coordinators[0]);

    //Total Number of Field Mobilizer
    $fieldmobilizers = $this->Query->rawQuery("SELECT COUNT(*) as count FROM users WHERE role = 'FIELDMOBILZER' AND is_active = 1 AND is_deleted = 0");
    $this->set('fieldmobilizers', $fieldmobilizers[0]);

    //Total Number of Village Leader
    $villageleaders = $this->Query->rawQuery("SELECT COUNT(*) as count FROM users WHERE role = 'VILLAGELEADER' AND is_active = 1 AND is_deleted = 0");
    $this->set('villageleaders', $villageleaders[0]);
  }
}
