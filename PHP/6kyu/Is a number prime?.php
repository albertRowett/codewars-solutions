<?php

function is_prime(int $n): bool
{
    if ($n <= 2 || $n % 2 === 0) {
        return $n === 2;
    }

    for ($i = 3; $i <= sqrt($n); $i += 2) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}

// Notes:
// - Had to google to find that the upper limit of the loop's range could be sqrt($n) not $n/3
// - Would be more efficient to calculate sqrt($n) outside the loop, so this isn't executed during every iteration