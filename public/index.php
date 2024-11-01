<?php

declare(strict_types=1);

$container = require __DIR__ . '/../bootstrap.php';

$container->get(\Slim\App::class)->run();
