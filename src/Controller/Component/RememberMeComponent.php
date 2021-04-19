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
 * @package   RememberMe
 * @author    Mohammed Sufyan Shaikh <sufyan297@gmail.com>
 * @copyright 2020 Copyright (c) Ascendtis IT Solutions
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   SVN: $Id$
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 */
namespace App\Controller\Component;


//Imports
use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

/**
 * RememberMe Component
 *
 * @category Component
 * @package  RememberMe
 * @author   Mohammed Sufyan Shaikh <sufyan297@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://www.actonate.com/
 */

class RememberMeComponent extends Component
{
    public $components = ['Special','Query'];

    /**
    *  Set User Data
    *    DATE: 5th September 2017
    *
    * @param array $data User Data (Auth)
    *
    * @return Array Order
    * @author Mohammed Sufyan <sufyan297@gmail.com>
    */
    public function setUserData($data = null, $cookieName = 'RememberMe')
    {
      return $this->Special->setCookie($cookieName, $data);
    }

    /**
    *  Get User Data
    *   Date: 5th September 2017
    *
    * @return Array order
    * @author Mohammed Sufyan <sufyan297@gmail.com>
    */
    public function getUserData($cookieName = 'RememberMe')
    {
        if ($this->Special->isCookieExists($cookieName)) {
            $data = $this->Special->getCookie($cookieName);
            if (isset($data['username'])) {
                $admin = $this->Query->getDataById('Admins', ['Admins.username' => $data['username']], ['id','name','username','role','created_at','updated_at']);
                if (!empty($admin)) {
                  return $admin;
                } else {
                  //Invalid Username
                  return false;
                }
            } else {
                //Cookie Hijacked
                return false;
            }
        } else {
            //Cookie Does not Exists.
            return false;
        }
    }

    /**
    *  Get User FrontData
    *   Date: 5th September 2017
    *
    * @return Array order
    * @author Mohammed Sufyan <sufyan297@gmail.com>
    */
    public function getFrontUserData($cookieName = 'FrontRememberMe')
    {
        if ($this->Special->isCookieExists($cookieName)) {
            $data = $this->Special->getCookie($cookieName);
            if (isset($data['username'])) {
                $user = $this->Query->getDataById('Users', ['Users.username' => $data['username']], ['id','first_name','last_name','email','username','role','created_at','updated_at']);
                if (!empty($user)) {
                  return $user;
                } else {
                  //Invalid Username
                  return false;
                }
            } else {
                //Cookie Hijacked
                return false;
            }
        } else {
            //Cookie Does not Exists.
            return false;
        }
    }

    /**
    *   Delete Cookie on Manual Logout
    *
    * @return true
    */
    public function removeUserData($cookieName = 'RememberMe')
    {
        if ($this->Special->isCookieExists($cookieName)) {
            $this->Special->deleteCookie($cookieName);
        }
        return true;
    }
}