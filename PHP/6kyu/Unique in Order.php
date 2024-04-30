<?php

function uniqueInOrder(array|string $iterable): array
{
    if (empty($iterable)) {
        return [];
    }

    $array = is_string($iterable) ? str_split($iterable) : $iterable;

    for ($i = count($array) - 1; $i > 0; $i--) {
        $array[$i] === $array[$i - 1] && array_splice($array, $i, 1);
    }

    return $array;
}

// Notes:
// - Could've used array_reduce with initial = [] instead of for loop to make opening if statement redundant
