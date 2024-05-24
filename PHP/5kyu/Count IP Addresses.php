<?php

function ips_between(string $start, string $end): int
{
    $startArr = explode('.', $start);
    $endArr = explode('.', $end);
    $between = 0;

    for ($i = 0; $i < 4; $i++) {
        $between += ($endArr[$i] - $startArr[$i]) * pow(256, 3 - $i);
    }

    return $between;
}

// Notes:
// - Can convert IPv4 addresses to integers with ip2long()
