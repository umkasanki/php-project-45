<?php

namespace BrainGames\Prime;

function IsPrime(int $number): string
{
    if ($number == 1) {
        return 'no';
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}
