<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;

function operation() :string
{
    $operations = ['+', '-', '*'];
    $currentOperationKey = array_rand($operations);
    return $operations[$currentOperationKey];
}

function sum(int $operandOne, int $operandTwo) :int
{
    return $operandOne + $operandTwo;
}

function sub(int $operandOne, int $operandTwo) :int
{
    return $operandOne - $operandTwo;
}

function multiply(int $operandOne, int $operandTwo) :int
{
    return $operandOne * $operandTwo;
}

function answer(): string
{
    $operandOne = rand(0, 9);
    $operandTwo = rand(0, 9);
    $operator = operation();

    line("Question: $operandOne $operator $operandTwo");

    return prompt('Your answer');
}
