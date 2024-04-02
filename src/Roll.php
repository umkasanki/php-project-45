<?php

namespace BrainGames\Roll;

$rollDice = function () {
    return rand(1, 6);
};

function play(int $playCount, callable $rollDice)
{
    $diagrammData = array_fill(1, 6, 0);
    for ($i = 0; $i < $playCount; $i++) {
        $diagrammData[$rollDice()] += 1;
    }
    foreach ($diagrammData as $key => $value) {
        echo $key . '|' . str_repeat('#', $value) . ' ' . $value . "\n";
    }
}

play(13, $rollDice);
