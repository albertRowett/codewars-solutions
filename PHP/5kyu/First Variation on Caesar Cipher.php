<?php

function movingShift(string $u, int $shift): array
{
    $len = strlen($u);
    $vStr = '';

    for ($i = 0; $i < $len; $i++) {
        $ascii = ord($u[$i]);

        if ($ascii > 64 && $ascii < 91) {
            $ascii = (($ascii - 65) + ($shift + $i)) % 26 + 65;
        } elseif ($ascii > 96 && $ascii < 123) {
            $ascii = (($ascii - 97) + ($shift + $i)) % 26 + 97;
        }

        $vStr .= chr($ascii);
    }

    if ($len % 5 === 0) {
        $v = str_split($vStr, $len / 5);
    } else {
        $v = str_split($vStr, intval(($len / 5) + 1));

        if (count($v) === 4) {
            $v[] = '';
        }
    }

    return $v;
}

function demovingShift(array $arr, int $shift): string
{
    $vStr = implode($arr);
    $len = strlen($vStr);
    $u = '';

    for ($i = 0; $i < $len; $i++) {
        $ascii = ord($vStr[$i]);

        if ($ascii > 64 && $ascii < 91) {
            $ascii = 90 - ((90 - $ascii) + ($shift + $i)) % 26;
        } elseif ($ascii > 96 && $ascii < 123) {
            $ascii = 122 - ((122 - $ascii) + ($shift + $i)) % 26;
        }

        $u .= chr($ascii);
    }

    return $u;
}

// Notes:
// - Should be able to combine the for loops into a single reusable function which can be used for both encryption and decryption
// - str_split() lines can be combined using ceil(), i.e. `str_split($vStr, ceil($len / 5))`
