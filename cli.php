<?php
require __DIR__.'/vendor/autoload.php';

$kernel = new App\AppKernel();
$app = new Cam57\Framework\App\Cli($kernel);

$app->run();