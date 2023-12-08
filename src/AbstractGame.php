<?php

declare(strict_types=1);

namespace DarkaOnLine\AdventOfCode2023;

use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractGame extends Command
{
    protected static $defaultName;

    protected array $inputDataPartOne;

    protected array $inputTestDataPartOne;

    protected array $inputDataPartTwo;

    protected array $inputTestDataPartTwo;


    #[NoReturn] protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $this->solveTestPartOne($this->inputTestDataPartOne);
        $this->solveRealPartOne($this->inputDataPartOne);

        $this->solveTestPartTwo($this->inputTestDataPartTwo);
        $this->solveRealPartTwo($this->inputDataPartTwo);

        dd('DONE');
    }

    protected function solveTestPartOne(array $inputTest): void
    {
        dump('');
        dump('========= PART ONE TEST ============');
        $testResults = $this->solvePartOne($inputTest);

        dump($testResults);
        dump('====================================');
        dump('');
    }

    protected function solveRealPartOne(array $inputData): void
    {
        $start = microtime(true);
        dump('========= PART ONE =================');
        $results = $this->solvePartOne($inputData);

        dump($results);
        dump("Process took ". number_format(microtime(true) - $start, 6). " seconds.");
        dump('====================================');
        dump('');
    }
    protected function solveTestPartTwo(array $inputTest): void
    {
        dump('========= PART TWO TEST ============');
        $testResults = $this->solvePartTwo($inputTest);

        dump($testResults);
        dump('====================================');
        dump('');
    }

    protected function solveRealPartTwo(array $inputData): void
    {
        $start = microtime(true);
        dump('========= PART TWO =================');
        $results = $this->solvePartTwo($inputData);

        dump($results);
        dump("Process took ". number_format(microtime(true) - $start, 6). " seconds.");
        dump('====================================');
        dump('');
    }

    abstract protected function solvePartOne(array $input): mixed;

    abstract protected function solvePartTwo(array $input): mixed;
}
