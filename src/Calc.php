<?php

namespace BrainGames\Calc;

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


