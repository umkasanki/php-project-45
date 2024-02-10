<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;

function gcd(int $a, int $b): int
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}

function getRandomNumbers(): array
{
    return [rand(2, 20), rand(2, 20)];
}
