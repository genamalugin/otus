<?php

require '../vendor/autoload.php';

use Otus\App;

try {
    $app = new App();
    echo $app->run() . PHP_EOL;

} catch (Exception $e) {
    echo $e;
}