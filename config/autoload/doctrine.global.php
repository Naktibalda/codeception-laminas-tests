<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' =>'Doctrine\DBAL\Driver\PDO\MySQL\Driver',
                'params' => array(
                    'host'     => '127.0.0.1',
                    'port'     => '',
                    'user'     => 'laminas_test',
                    'password' => 'laminas_test',
                    'dbname'   => 'laminas_test',
                )))));