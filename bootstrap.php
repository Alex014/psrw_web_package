<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use \Confy\Confy;

Confy::load(__DIR__.'/config/routes.php');
Confy::load(__DIR__.'/config/autoload.php');

foreach (Confy::get('autoload') as $namespace => $path) {
    $loader->addPsr4($namespace, __DIR__. '/'.$path);
}

$r = new \psrw\Router(Confy::get('routes'));
$r->run();