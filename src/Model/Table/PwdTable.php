<?php

namespace App\Model\Table;

use Cake\Utility\Security;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\EventManager;
use Cake\ORM\TableRegistry;

/**
 *   Pwd Model
 *
 */
class PwdTable extends Table
{
  /**
   * Initialize method
   *
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('pwd');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp', [
      'events' => [
        'Model.beforeSave' => [
          'created_at' => 'new',
          'updated_at' => 'always'
        ]
      ]
    ]);
  }
}
