<?php

return array(
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=test3;host=localhost;charset=utf8',
        'username' => 'root',
        'password' => 'p3lk4x',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
);