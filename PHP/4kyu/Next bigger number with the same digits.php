<?php

function nextBigger(int $n): int
{
    $a = str_split($n);
    rsort($a);
    $max = array_reduce($a, function (string $carry, string $item) {
        return $carry . $item;
    }, '');

    while ($n < $max) {
        $n++;
        $b = str_split($n);
        rsort($b);

        if ($b === $a) {
            return $n;
        }
    }

    return -1;
}

// Notes:
// - Can calculate $max more simply with implode()
// - For loop probably more appropriate than while
// - To avoid repetition, could create reusable function to perform str_split and rsort
