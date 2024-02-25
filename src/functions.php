<?php

require_once __DIR__ . '/../vendor/autoload.php';

function barChart($arr):void
{
    if (empty($arr)) {
        return;
    }

    $min = min(min($arr), 0);
    $max = max(max($arr), 0);

    $diagramH = $max - $min;

    function getChar($val, $row): string
    {
        $char = '#';
        return $char;
    }

    for ($row = $max; $row > $min; $row--) {
        foreach ($arr as $value) {
            if ($row > 0) {
                if ($value >= $row) {
                    echo '*';
                } else {
                    echo ' ';
                }
            } else {
                if ($value < $row) {
                    echo '# ';
                } else {
                    echo ' ';
                }
            }
        }
        echo PHP_EOL;
    }
}

barChart([5, 10, -5, -3, 7]);
