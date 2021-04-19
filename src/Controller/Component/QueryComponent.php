<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * PHP version 7
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @category  Component
 * @package   Query
 * @author    Mohammed Sufyan Shaikh <mohammed.sufyan@actonate.com>
 * @copyright 2017 Copyright (c) Actonate Pvt. Ltd.
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   SVN: $Id$
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 */
namespace App\Controller\Component;


use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

use Cake\Datasource\ConnectionManager;

/**
 * Query Component
 *
 * @category Component
 * @package  Query
 * @author   Mohammed Sufyan Shaikh <mohammed.sufyan@actonate.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://www.actonate.com/
 */
class QueryComponent extends Component
{
    //Load Other Components
    public $components = ['Special'];


    /**
     *  Getter Method For Tables
     *
     * @param $conditions array Pass conditions (where)
     * @param $fields     array Pass Fields (select)
     * @param $order      array Order By
     *
     * @return array
     */
    public function getData($model = null, $conditions = [], $fields = ['id'],
        $order = [], $limit = false, $contain = [], $offset = false, $distinct = false
    ) {
        if ($model != null) {
            //Model->TableName
            $items = TableRegistry::get($model);
        }

        $query = $items->find();
        if ($limit !== false) {
            $query->limit($limit);
        }
        if ($offset !== false) {
            $query->offset($offset);
        }
        if ($distinct !== false) {
            $query->distinct($distinct);
        }
        $tmp = $query->where($conditions)
                ->select($fields)
                ->order($order)
                ->contain($contain)
                ->toArray();
        // pr($tmp);die();
        return $tmp;
    }


    /**
     *  Getter Method For Tables
     *
     * @param $conditions array Pass conditions (where)
     * @param $fields     array Pass Fields (select)
     * @param $order      array Order By
     *
     * @return array
     */
    public function getDataByList($model = null, $conditions = [], $fields = ['id'],
        $order = [], $limit = false, $contain = [], $offset = false, $distinct = false
    ) {
        if ($model != null) {
            //Model->TableName
            $items = TableRegistry::get($model);
        }

        $query = $items->find();
        if ($limit !== false) {
            $query->limit($limit);
        }
        if ($offset !== false) {
            $query->offset($offset);
        }
        if ($distinct !== false) {
            $query->distinct($distinct);
        }
        $tmp = $query->where($conditions)
                ->select($fields)
                ->order($order)
                ->contain($contain)
                ->toList();
        // pr($tmp);die();
        return $tmp;
    }

    /**
     *  Getter Method For Tables
     *
     * @param $conditions array Pass conditions (where)
     * @param $fields     array Pass Fields (select)
     * @param $order      array Order By
     *
     * @return array
     */
    public function getAllData($model = null, $conditions = [],
        $order = [], $limit = false, $contain = [], $offset = false, $distinct = false
    ) {
        if ($model != null) {
            //Model->TableName
            $items = TableRegistry::get($model);
        }

        $query = $items->find();
        if ($limit !== false) {
            $query->limit($limit);
        }
        if ($offset !== false) {
            $query->offset($offset);
        }
        if ($distinct !== false) {
            $query->distinct($distinct);
        }
        $tmp = $query->where($conditions)
                ->order($order)
                ->contain($contain)
                ->toArray();
        // pr($tmp);die();
        return $tmp;
    }



    /**
    *   Get Field By Id
    *
    * @param $model string null
    * @param $conditions array Pass conditions (where)
    * @param $order      array Order By
    *
    * @return object
    */
    public function getDataById($model = null, $conditions = [], $fields = ['id'], $order = [], $contain = [])
    {
        if ($model != null) {
            $items = TableRegistry::get($model);
        }

        $query = $items->find()
                ->where($conditions)
                ->order($order)
                ->select($fields)
                ->contain($contain)
                ->first();

        return $query;
    }

    /**
    *   Get Field By Id
    *
    * @param $model string null
    * @param $conditions array Pass conditions (where)
    * @param $order      array Order By
    *
    * @return object
    */
    public function getAllDataById($model = null, $conditions = [], $order = [], $contain = [])
    {
        if ($model != null) {
            $items = TableRegistry::get($model);
        }

        $query = $items->find()
                ->where($conditions)
                ->order($order)
                ->contain($contain)
                ->first();

        return $query;
    }

    /**
    *   Set Data
    * @return array
    */
    public function setData($model = null, $fields = [])
    {
        if ($model != null) {
            $model = TableRegistry::get($model);
        }

        $new_record = $model->newEntity($fields);

        if ($result = $model->save($new_record)) {
            //Record saved!
            return $result;
        }
        //Defaults to false
        return false;
    }

    /**
     *  Set All Data
     * 
     * @return array
     */
    public function setAllData($model = null, $arr_fields = [])
    {
        if ($model != null) {
            $model = TableRegistry::get($model);
        }

        $bulk_record = $model->newEntities($arr_fields);

        if ($result = $model->saveMany($bulk_record)) {
            //Record saved!
            return $result;
        }
        //Defaults to false
        return false;
    }
    
    /**
    *   Delete Data
    * @return boolean
    */
    public function removeData($model = null, $conditions = [])
    {
        if ($model != null) {
            $model = TableRegistry::get($model);
        }

        if ($model->deleteAll(
            $conditions
        )) {
            return true; //It will always return true.
        }
        return false;
    }


    /**
     * Raw Query
     * 
     * @return array
     */
    public function rawQuery($query = null, $type = 'all', $db_con = 'default')
    {
        if ($query == null) return false;
        $records = [];

        $conn = ConnectionManager::get($db_con);        
        $data = $conn->execute($query);

        if ($type == 'one') {
            $records = $data->fetch('assoc');
        } else {
            $records = $data->fetchAll('assoc');            
        }
        return $records;
    }
}

?>