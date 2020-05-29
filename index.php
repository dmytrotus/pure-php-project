<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ExampleApp\HelloWorld;

$helloWorld = new HelloWorld();
$helloWorld->announce();