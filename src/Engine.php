<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return ucfirst($name);
}

function game($name, $question, $result): bool
{
    line("Question: $question");
    $answer = prompt('Your answer');
    $gameResult = $answer == $result;

    if (!$gameResult) {
        line("'$answer' is wrong answer ;(. Correct answer was '$result'. Let's try again, $name!");
    }

    return $answer == $result;
}

function checkGame($name, $gameEvent): void
{
    $i = 0;
    while ($i < 3) {
        if ($gameEvent($name)) {
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
