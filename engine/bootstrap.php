<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;

try {
    // DI container
    $di = new DI();
    
    $di->set('test', ['db' => 'db_object']);
    $di->set('test2', ['mail' => 'mail_object']);
    // Cms object
    $cms = new Cms($di);
    // Run Cms
    $cms->run();
} catch (ErrorException $exc) {
    echo $exc->getMessage();
}
