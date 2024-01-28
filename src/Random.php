<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function askRandom($name = 'Guest')
{
    function isEven($number)
    {
        if ($number % 2 == 0) {
            return 'yes';
        }
        return 'no';
    }

    line('Answer "yes" if the number is even, otherwise answer "no".');

    $i = 0;
    while ($i < 3) {
        $randomInt = rand(10, 99);
        line("Question: $randomInt");
        $answer = prompt('Your answer');

        if ($answer === isEven($randomInt)) {
            print_r("Correct!\n");
        } else {
            break;
        }

        $i = $i + 1;

        if ($i === 3) {
            line("Congratulations, $name!");
        }
    }
}
