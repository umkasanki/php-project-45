<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;

function gcd($a, $b)
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

function getProgression(): array
{
    $step = rand(1, 4);
    $arr = [$step];
    $i = 0;

    do {
        array_push($arr, $arr[$i ] + $step);
    } while ($i++ <= 10);

    return $arr;
}
