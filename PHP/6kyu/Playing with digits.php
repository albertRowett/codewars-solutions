<?php

function digPow(int $n, int $p): int
{
    $array = array_map('intval', str_split(strval($n)));
    $sum = 0;

    foreach ($array as $index => $int) {
        $sum += $int ** ($p + $index);
    }

    return $sum % $n === 0 ? $sum / $n : -1;
}

// Notes:
// - Type juggling unnecessary to generate $array; could just use `str_split($n)`
// - `$p++` would achieve same as `$p + $index` in foreach loop, obviating accessing index 
