<?php

function rgb(int $r, int $g, int $b): string
{
    $rgb = [$r, $g, $b];
    $hex = '';
    $converter = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];

    foreach ($rgb as $dec) {
        $dec = $dec < 0 ? 0 : $dec;
        $dec = $dec > 255 ? 255 : $dec;
        $hex .= $converter[intval($dec / 16)];
        $hex .= $converter[$dec % 16];
    }

    return $hex;
}

// Notes:
// - Simpler solutions possible using sprintf() with '%02X%02X%02X' format