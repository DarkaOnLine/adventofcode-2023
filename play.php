#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use DarkaOnLine\AdventOfCode2023\Game1;
use DarkaOnLine\AdventOfCode2023\Game2;
use DarkaOnLine\AdventOfCode2023\Game3;
use DarkaOnLine\AdventOfCode2023\Game4;
use DarkaOnLine\AdventOfCode2023\Game5;
use DarkaOnLine\AdventOfCode2023\Game6;
use DarkaOnLine\AdventOfCode2023\Game7;
use DarkaOnLine\AdventOfCode2023\Game8;
use DarkaOnLine\AdventOfCode2023\Game9;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new Game1);
$application->add(new Game2);
$application->add(new Game3);
$application->add(new Game4);
$application->add(new Game5);
$application->add(new Game6);
$application->add(new Game7);
$application->add(new Game8);
$application->add(new Game9);

$application->run();
