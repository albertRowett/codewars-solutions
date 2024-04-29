<?php

function disemvowel($string)
{
    return str_replace(['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U'], '', $string);
}
