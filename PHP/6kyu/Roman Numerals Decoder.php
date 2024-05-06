<?php

function solution(string $roman): int
{
    $number = 0;

    $array = [
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1,
        'IV' => -2,
        'IX' => -2,
        'XL' => -20,
        'XC' => -20,
        'CD' => -200,
        'CM' => -200
    ];

    foreach ($array as $numerals => $value) {
        $number += substr_count($roman, $numerals) * $value;
    }

    return $number;
}
