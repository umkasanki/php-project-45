<?php

require_once __DIR__ . '/../vendor/autoload.php';

function barChart($arr):void
{
    $min = min(min($arr), 0);
    $max = max(max($arr), 0);

    $diagramH = $max - $min;
    $diagramW = count($arr) - 1;

    function getChar($val, $row): string
    {
        $char = '#';
        return $char;
    }

    for ($row = 0; $row <= $diagramH; $row++) {
//        for ($col = 0; $col <= $diagramW; $col++) {
//            echo getChar($arr[$col], $row);
//            if ($col == $diagramW) {
//                echo "\n";
//            }
//        }
        foreach ($arr as $value) {
            if ($value > $row) {
                echo "# ";
            } else {
                echo "  ";
            }
        }
        echo PHP_EOL;
    }
}


barChart([5, 10, 1, 3, 4]);
