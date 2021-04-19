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
 * @package   Email
 * @author    Mohammed Sufyan Shaikh <mohammed.sufyan@actonate.com>
 * @copyright 2017 Copyright (c) Actonate Pvt. Ltd.
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   SVN: $Id$
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 */
namespace App\Controller\Component;


use Cake\Controller\Component;
use Cake\Mailer\Email;

/**
 * Email Component
 *
 * @category Component
 * @package  Email
 * @author   Mohammed Sufyan Shaikh <mohammed.sufyan@actonate.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://www.actonate.com/
 */

class EmailComponent extends Component
{
    public $components = ['Special'];

    /**
     *  Send Mail
     *    DATE: 19th March 2017
     *
     * @param string $template Template Name
     * @param string $to       Whom to send this mail
     * @param string $subject  Subject of Mail
     * @param array  $vars     Variables to used in mail
     * @param array  $bcc      Bcc email addresses.
     *
     * @return array
     * @author Mohammed Sufyan <mohammed.sufyan@actonate.com>
     */
    public function send($template = null, $to = null, $subject = null, $vars = [],
        $bcc = []
    ) {
        $email = new Email('default');

        if (!empty($bcc)) {
            $email->setBcc($bcc);
        }
        $email->setFrom(
            [
            'noreply@ascendtis.com' => 'Ascendtis'
            ]
        )
            ->setTo($to)
            ->setSubject($subject)
            ->setEmailFormat('html')
            ->setTemplate($template)
            ->setViewVars($vars)
            ->setLayout('default')
            ->send();

    }
}
?>
