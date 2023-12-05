#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use DarkaOnLine\AdventOfCode2023\Game1;
use DarkaOnLine\AdventOfCode2023\Game2;
use DarkaOnLine\AdventOfCode2023\Game3;
use DarkaOnLine\AdventOfCode2023\Game4;
use DarkaOnLine\AdventOfCode2023\Game5;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new Game1);
$application->add(new Game2);
$application->add(new Game3);
$application->add(new Game4);
$application->add(new Game5);

$application->run();
