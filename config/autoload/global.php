<?php

/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */
return array(
    'view_manager' => array(
        'display_exceptions' => true,
    ),
    'router' => array(
        'routes' => array(
            'oauth' => array(
                'options' => array(
                    'route' => '/oauth'
                ),
            ),
        ),
    ),
    
'zf-oauth2'    => array(
    'storage'          => 'ZF\OAuth2\Adapter\PdoAdapter',
    'db'               => array(
        'dsn'      => 'mysql:dbname=mariamia_db;host=localhost',
        'route'    => '/oauth',
        'username' => 'mariamia_user',
        'password' => '^6xRkrIx@vAi',
    ),
    'storage_settings' => array(
        'user_table' => 'shops',
    ),
    'allow_implicit'   => true,
    'access_lifetime'  => 14400
),
    'doctrine' => [
        'connection' => [
            // default connection name
            'orm_default' => [
                'driverClass' => \Doctrine\DBAL\Driver\PDOMySql\Driver::class,
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'mariamia_user',
                    'password' => '^6xRkrIx@vAi',
                    'dbname' => 'mariamia_db',
                    'charset' => 'utf8',
                    'driverOptions' => array(
                        1002 => 'SET NAMES utf8',
                    ),
                ],
            ],
        ],
    ],
);
