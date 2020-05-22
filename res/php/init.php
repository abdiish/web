<?php

session_start();
require 'medoo.php';
use Medoo\Medoo;

try {
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'cms_ieimc',
        'server' => 'localhost',
        'username' => 'root',
        'password' => ''
    ]);
} catch (PDOException $e) {
    echo "No se pudo conectar a la base de datos" . $e;
}

?>
<!--?php

session_start();
require 'medoo.php';
use Medoo\Medoo;

try {
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'id13019499_cms_ieimc',
        'server' => 'localhost',
        'username' => 'id13019499_ieimc',
        'password' => 'VLl2CaAI<=hfB5\r'
    ]);
} catch (PDOException $e) {
    echo "No se pudo conectar a la base de datos" . $e;
}

?-->