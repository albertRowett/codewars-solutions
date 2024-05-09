<?php

function validBraces(string $braces): bool
{
    $opposites = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];
    $array = [];

    for ($i = 0; $i < strlen($braces); $i++) {
        if (in_array($braces[$i], $opposites)) {
            $array[] = $braces[$i];
        } else {
            if ($opposites[$braces[$i]] !== array_pop($array)) {
                return false;
            }
        }
    }

    return $array === [];
}

// Notes:
// - More elegant solution possible using str_replace in a do-while loop, i.e.:
//   do {
//     $braces = str_replace(['()', '[]', '{}'], '', $braces, $count);
//   } while ($count);
