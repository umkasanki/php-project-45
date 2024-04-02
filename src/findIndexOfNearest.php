<?php

require_once __DIR__ . '/../vendor/autoload.php';

function findIndexOfNearest($arr, $search) {
    if (empty($arr)) {
        return null;
    }

    $closest = null;
    foreach ($arr as $item) {
        if ($closest === null || abs($closest - $search) > abs($item - $search)) {
            $closest = $item;
        }
    }

    return array_search($closest, $arr);
}

print_r(
    findIndexOfNearest([15, 10, 3, 4], 0)
);
