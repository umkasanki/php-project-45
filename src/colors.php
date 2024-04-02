<?php

require_once __DIR__ . '/../vendor/autoload.php';

function hexToRgb(string $hexColor): array
{
    if (!preg_match("/^#[0-9A-Fa-f]{6}$/", $hexColor)) {
        return [];
    }

    $hexRed = substr($hexColor, 1, 2);
    $hexGreen = substr($hexColor, 3, 2);
    $hexBlue = substr($hexColor, 5, 2);

    $red = hexdec($hexRed);
    $green = hexdec($hexGreen);
    $blue = hexdec($hexBlue);

    return [
        'r' => $red,
        'g' => $green,
        'b' => $blue
    ];
}

function rgbToHex(int $red, int $green, int $blue): string
{
    if ($red < 0 || $red > 255 || $green < 0 || $green > 255 || $blue < 0 || $blue > 255) {
        return '';
    }

    $hexRed = dechex($red);
    $hexGreen = dechex($green);
    $hexBlue = dechex($blue);

    $hexRed = str_pad($hexRed, 2, "0", STR_PAD_LEFT);
    $hexGreen = str_pad($hexGreen, 2, "0", STR_PAD_LEFT);
    $hexBlue = str_pad($hexBlue, 2, "0", STR_PAD_LEFT);

    return "#" . strtoupper($hexRed . $hexGreen . $hexBlue);
}

print_r(hexToRgb('#24ab00'));
print_r(rgbToHex(36, 171, 0));
