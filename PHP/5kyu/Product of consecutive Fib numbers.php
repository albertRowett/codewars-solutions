<?php

function productFib(int $prod): array
{
    $fibs = [0, 1];
    $penult = 0;
    $last = 1;

    while ($penult * $last < $prod) {
        $fibs[] = $penult + $last;
        $penult = $fibs[count($fibs) - 2];
        $last = $fibs[count($fibs) - 1];
    }

    return [$penult, $last, $penult * $last === $prod];
}

// Notes:
// - Don't actually need $fibs array; can achieve same thing with just three int vars, e.g. $a, $b and $next
