<?php
/**
 * Created by PhpStorm.
 * User: irvintone
 * Date: 27/12/18
 * Time: 10:34
 */


//$db = new PDO('sqlite:' . realpath(__DIR__) . '/zftutorial.db');
try{
    $connection = new PDO("mysql:host=127.0.0.1;port=3306;dbname=calidad_software", "root", "1234");
    $fh = fopen(__DIR__ . '/schema.sql', 'r');
    while ($line = fread($fh, 4096)) {
        $connection->exec($line);
    }
    fclose($fh);
    
}catch (Exception $e){
    echo "</pre>";print_r($e->getMessage());exit;
}
