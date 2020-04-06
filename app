<?php
require_once __DIR__ .  DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\SayHello;

$app = new \Symfony\Component\Console\Application('demo application');


$app->add(new SayHello());

$app->add(new \App\Times());


$app->run();