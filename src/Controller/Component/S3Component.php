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
 * @package   SES
 * @author    Mohammed Sufyan Shaikh <mohammed.sufyan@actonate.com>
 * @copyright 2014-2016 Copyright (c) LetsShave Pvt. Ltd.
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   SVN: $Id$
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 */
namespace App\Controller\Component;



use Cake\Controller\Component;
use Aws\Credentials\Credentials;
use Cake\Core\Configure;

use Aws\S3\S3Client;

/**
 * S3 Component
 *  We are no more using This Component
 *
 * @category Component
 * @package  S3
 * @author   Mohammed Sufyan Shaikh <mohammed.sufyan@actonate.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://www.letsshave.com/
 */
class S3Component extends Component
{
    public $components = ['Special'];

    /**
     * Connect to S3
     *
     * @return array
     * @author Mohammed Sufyan <mohammed.sufyan@actonate.com>
     */
    private function _connect()
    {
        // $config = $this->_getAwsConfig();

        return $client = S3Client::factory(
            array(
                'version' => 'latest',
                'region' => 'nl-ams',
                'endpoint' => 'https://s3.nl-ams.scw.cloud',
                'http' => [
                    'verify' => false //allow http
                ],
                'credentials' => array(
                    'key' => getenv('S3_ACCESS_KEY'),
                    'secret' => getenv('S3_SECRET_KEY')
                )
            )
        );
    }

    /**
     *  Get AWS Configs
     *    DATE: 17th March 2017
     *
     * @return array
     * @author Mohammed Sufyan <mohammed.sufyan@actonate.com>
     */
    // private function _getAwsConfig()
    // {
    //     return Configure::read('aws');
    // }

    /**
    *   Upload file to S3
    *       DATE: 27th September 2017
    *
    * @return void
    * @author Mohammed Sufyan <mohammed.sufyan@actonate.com>
    */
    public function upload($bucket = null, $key = null, $source = null)
    {
        $resp = $this->_connect()->putObject(array(
            'Bucket' => $bucket,
            'Key'    => $key,
            'SourceFile' => $source,
            'ACL' => 'public-read'
        ));

        return $resp;
    }
}
?>