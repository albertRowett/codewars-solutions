<?php

function narcissistic(int $value): bool
{
    $string = strval($value);
    $array = str_split($string);

    return array_reduce($array, function (int $carry, string $item) use ($array): int {
        return $carry + (int) $item ** count($array);
    }, 0) === $value;
}
