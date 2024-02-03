<?php

namespace BrainGames\Calc;

use function BrainGames\Cli\isEven;
use function cli\line;
use function cli\prompt;

function operation(): string
{
    $operations = ['+', '-', '*'];
    $currentOperationKey = array_rand($operations);
    return $operations[$currentOperationKey];
}

function sum(int $operandOne, int $operandTwo): int
{
    return $operandOne + $operandTwo;
}

function sub(int $operandOne, int $operandTwo): int
{
    return $operandOne - $operandTwo;
}

function multiply(int $operandOne, int $operandTwo): int
{
    return $operandOne * $operandTwo;
}

function getAnswer(): string
{
    $operandOne = rand(0, 9);
    $operandTwo = rand(0, 9);
    $operator = operation();

    line("Question: $operandOne $operator $operandTwo");

    $operatorResult = null;

    switch ($operator) {
        case '+':
            $operatorResult = $operandOne + $operandTwo;
            break;
        case '-':
            $operatorResult = $operandOne - $operandTwo;
            break;
        case '*':
            $operatorResult = $operandOne * $operandTwo;
            break;
    }

    $answer = intval(prompt('Your answer'));

    return $operatorResult === $answer;
}

function calc(string $name)
{
    $i = 0;
    while ($i < 3) {
        if (getAnswer()) {
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
