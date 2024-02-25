<?php

require_once __DIR__ . '/../vendor/autoload.php';

function barChart($arr):void
{
    $min = min(min($arr), 0);
    $max = max(max($arr), 0);

    $diagramH = $max - $min;

    function getChar($val, $row): string
    {
        $char = '#';
        return $char;
    }

    for ($row = 0; $row <= $diagramH; $row++) {
        foreach ($arr as $value) {
            if ($value > $diagramH - $row) {
                echo "+ ";
            } else {
                echo " ";
            }
        }
        echo PHP_EOL;
    }
}

barChart([5, 10, 0, 3, 4]);
