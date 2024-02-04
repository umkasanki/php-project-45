<?php

namespace BrainGames\Gcd;

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

function getRandomNumbers(): array
{
    return [rand(2, 20), rand(2, 20)];
}

function askQuestion(): bool
{
    [$x, $y] = getRandomNumbers();

    line("Question: $x $y");
    $answer = intval(prompt('Your answer'));

    return $answer === gcd($x, $y);
}

function runQuiz(string $name): void
{
    $i = 0;
    while ($i < 3) {
        if (askQuestion()) {
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
