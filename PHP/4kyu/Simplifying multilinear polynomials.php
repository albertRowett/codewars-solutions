<?php

function simplify(string $poly): string
{
    $len = strlen($poly);
    $var = '';
    $arr = [];

    for ($i = 0; $i < $len; $i++) {
        $var .= $poly[$i];

        if ($poly[$i + 1] === '+' || $poly[$i + 1] === '-' || $i === $len - 1) {
            if (preg_match('/-?\d+/', $var, $match)) {
                $num = intval($match[0]);
                $var = str_replace($match[0], '', $var);
            } elseif ($var[0] === '-') {
                $num = -1;
            } else {
                $num = 1;
            }

            $var = str_replace(['+', '-'], '', $var);
            $varArr = str_split($var, 1);
            sort($varArr);
            $var = implode($varArr);
            $arr[$var] = $arr[$var] ? $arr[$var] + $num : $num;
            $var = '';
        }
    }

    ksort($arr);
    uksort($arr, function ($key1, $key2) {
        return strlen($key1) - strlen($key2);
    });

    $simplePoly = '';

    foreach ($arr as $var => $num) {
        if ($num > 0) {
            $simplePoly .= '+';

            if ($num > 1) {
                $simplePoly .= strval($num);
            }

            $simplePoly .= $var;
        } elseif ($num < 0) {
            if ($num < -1) {
                $simplePoly .= strval($num);
            } else {
                $simplePoly .= '-';
            }

            $simplePoly .= $var;
        }
    }

    return $simplePoly[0] === '+' ? substr($simplePoly, 1) : $simplePoly;
}
