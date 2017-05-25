<?php

require_once(__DIR__ . '/vendor/autoload.php');

$directories = array(
    __DIR__,
    __DIR__ . '/controllers',
    __DIR__ . '/models',
    __DIR__ . '/views',
);

$autoloader = new \iRAP\Autoloader\Autoloader($directories);

# do nothing with the $autoloader, everything was run in the constructor
