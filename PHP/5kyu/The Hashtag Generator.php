<?php

function generateHashtag(string $str): string|false
{
    $hashtag = '#';
    $words = explode(' ', $str);

    foreach ($words as $word) {
        $hashtag .= ucfirst($word);
    }

    if (strlen($hashtag) > 1 && strlen($hashtag) < 141) {
        return $hashtag;
    }

    return false;
}

// Notes:
// - Could avoid string to array and array to string conversions using `str_replace(' ', '', ucwords($str))`