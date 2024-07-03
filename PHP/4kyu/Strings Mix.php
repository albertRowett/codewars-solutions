<?php

function mix(string $s1, string $s2): string
{
    $arr = [];
    
    foreach (range('a', 'z') as $letter) {
        $count1 = substr_count($s1, $letter);
        $count2 = substr_count($s2, $letter);

        if ($count1 > 1 || $count2 > 1) {
            if ($count1 > $count2) {
                $arr[str_repeat($letter, $count1)] = '1';
            } else {
                $arr[str_repeat($letter, $count2)] = $count2 > $count1 ? '2' : '=';
            }
        }
    }

    asort($arr);
    uksort($arr, function (string $a, string $b): int {
        return strlen($b) - strlen($a);
    });

    $mix = '';

    foreach ($arr as $chars => $strNo) {
        $mix .= $strNo . ':' . $chars . '/';
    }

    return substr($mix, 0, -1);
}

// Notes:
// - count_chars() can generate array of a string's ASCII character counts
// - Spaceship operator (`<=>`) can be used to compare two expressions
// - Null coalescing operator (`?:`) can be used to provide a second comparison if a first results in a tie (i.e. 0)
