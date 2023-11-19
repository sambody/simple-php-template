<?php

return [
   'DBConnection' => [
        'host' => 'localhost',
        'port' => 8080,
        'dbname' => 'cursusphp',
        'charset' => 'utf8'
   ],
    'DBUsername' => 'root',
    'DBPassword' => '',
    'DBOptions' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];