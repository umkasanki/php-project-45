<?php

require_once __DIR__ . '/../vendor/autoload.php';

function isEven(int $int):bool
{
    return $int % 2 === 0;
}

function getSameParity(array $arr):array
{
    if (empty($arr)) {
        return [];
    }
    $isFirstItemEven = isEven($arr[0]);
    return array_values(array_filter($arr, function ($item) use ($isFirstItemEven) {
        if ($isFirstItemEven) {
            return isEven($item);
        } else {
            return !isEven($item);
        }
    }));
}

print_r(
    getSameParity(
        [2, 0, 10, -2]
    )
);
