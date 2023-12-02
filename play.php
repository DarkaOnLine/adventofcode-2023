#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use DarkaOnLine\AdventOfCode2023\Game1;
use DarkaOnLine\AdventOfCode2023\Game2;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new Game1);
$application->add(new Game2());

$application->run();
