<?php

function bouncingBall(float $h, float $bounce, float $window): int
{
    if ($h <= 0 || $bounce <= 0 || $bounce >= 1 || $window >= $h) {
        return -1;
    }

    $result = 1;
    $h *= $bounce;

    while ($h > $window) {
        $result += 2;
        $h *= $bounce;
    }

    return $result;
}

// Notes:
// - Could simplify by replacing lines 9-17 with return that recalls function with updated $h and adds 2, i.e. `return bouncingBall($h * $bounce, $bounce, $window) + 2`
