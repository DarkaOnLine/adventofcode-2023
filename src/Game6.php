<?php

declare(strict_types=1);

namespace DarkaOnLine\AdventOfCode2023;

class Game6 extends AbstractGame
{
    protected static $defaultName = 'game:6';

    protected array $inputTestDataPartOne = ['Time:      7  15   30
Distance:  9  40  200'];

    protected array $inputDataPartOne =  ['Time:        61     70     90     66
Distance:   643   1184   1362   1041'];

    protected array $inputTestDataPartTwo = [[71530], [940200]];

    protected array $inputDataPartTwo = [[61709066], [643118413621041]];

    protected function solvePartOne(array $input): int {

        list ($times, $distances) = $this->parseInput($input);

        $winningsPerBoat = $this->getWinningsPerBoat($times, $distances);

        return array_product($winningsPerBoat);

    }

    protected function solvePartTwo(array $input): int {

        list ($times, $distances) = $input;

        $winningsPerBoat = $this->getWinningsPerBoat($times, $distances);

        return array_product($winningsPerBoat);
    }


    /**
     * @param array $times
     * @param array $distances
     * @return array
     */
    public function getWinningsPerBoat(array $times, array $distances): array
    {
        $winningsPerBoat = [];

        foreach ($times as $boat => $time) {
            $recordDistance = $distances[$boat];

            if (!isset($winningsPerBoat[$boat])) {
                $winningsPerBoat[$boat] = 0;
            }

            $holdTime = 0;

            while ($holdTime <= $time) {
                $speed = $holdTime;

                $thisDistance = $speed * ($time - $holdTime);

                if ($thisDistance > $recordDistance) {
                    $winningsPerBoat[$boat]++;
                }

                $holdTime++;
            }
        }
        return $winningsPerBoat;
    }

    /**
     * @param array $input
     * @return array
     */
    protected function parseInput(array $input): array {
        $lines = explode(PHP_EOL, $input[0]);
        preg_match_all('/(\d+)/', $lines[0], $time);
        $time = $time[0];

        preg_match_all('/(\d+)/', $lines[1], $distance);
        $distance = $distance[0];

        return [
            $time, $distance
        ];
    }
}
