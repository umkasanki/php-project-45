<?php

require_once __DIR__ . '/../vendor/autoload.php';

function barChart($arr):string
{
    if (empty($arr)) {
        return '';
    }

    $min = min(min($arr), 0);
    $max = max(max($arr), 0);

    $out = '';

    for ($row = $max; $row > $min; $row--) {
        foreach ($arr as $value) {
            if ($row > 0) {
                if ($value >= $row) {
                    $out .=  '*';
                } else {
                    $out .=  ' ';
                }
            } else {
                if ($value < $row) {
                    $out .=  '# ';
                } else {
                    $out .=  ' ';
                }
            }
        }
        if ($row != $min + 1) {
            $out .=  "\n";
        }
    }
    return $out;
}

$data = [
    ' *   ',
    ' *  *',
    ' *  *',
    ' *  *',
    '**  *',
    '  #  ',
    '  #  ',
    '  #  '
];
$expected = implode("\n", $data);

$numbers = [1, 5, -3, 0, 4];
//$numbers = [-5, 5, -3, -2, -1, 1, 2, 3, 0, 6];

//var_dump(barChart($numbers));
var_dump($expected);
