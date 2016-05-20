<?php

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/api.php');

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/secret', 'config');
$dotenv->load();

$api = new PHP_CRUD_API(array(
    'dbengine'=>'MySQL',
    'hostname'=>getenv('DATABASE_HOST'),
    'username'=>getenv('DATABASE_USER'),
    'password'=>getenv('DATABASE_PASSWORD'),
    'database'=>getenv('DATABASE_NAME'),
    'charset'=>'utf8'
));
$api->executeCommand();