<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;

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
