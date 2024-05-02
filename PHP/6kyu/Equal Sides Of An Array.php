<?php

function find_even_index(array $arr): int
{
    for ($i = 0; $i < count($arr); $i++) {
        $left = array_reduce(array_slice($arr, 0, $i), function (int $carry, int $item) {
            return $carry + $item;
        }, 0);
        $right = array_reduce(array_slice($arr, $i + 1), function (int $carry, int $item) {
            return $carry + $item;
        }, 0);

        if ($left === $right) {
            return $i;
        }
    }

    return -1;
}

// Notes:
// - Using array_sum would be more appropriate than array_reduce