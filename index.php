<?php declare(strict_types=1);
error_reporting(E_ALL);
 
use Engine\Core\Database\Connection;
 
require __DIR__ . '/engine/bootstrap.php';

$config = require_once  __DIR__ . '/engine/Config/config.php';


//$db = new Connection($config['db']);

//$insert = $db->query("INSERT INTO posts (title, content) VALUES (:title, :content)", [
//       'title' => 'Hello World',
//       'content' => 'Wrire content'
//]);
//if ($insert > 0) {
//    print('Success!!!');
//}