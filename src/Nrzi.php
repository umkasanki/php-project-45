<?php

namespace BrainGames\Nrzi;

function decode($str) {
    if ($str === '' || $str === '|') {
        return '';
    }
    $splittedSignalStr = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
    $result = array_map(fn($signal) => ($signal === "|" ? 1 : 0), $splittedSignalStr);
    return str_replace("10", "1", implode($result));
}

$signal = '_|¯|____|¯|__|¯¯¯';
print_r(decode($signal)); // '011000110100'
