<?php

function human_readable(int $seconds): string
{
    $hours = intval($seconds / 3600);
    $minutes = intval(($seconds - 3600 * $hours) / 60);
    $seconds = ($seconds - 3600 * $hours) % 60;

    return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
}

// Notes:
// - Don't need to ensure $hours and $minutes are integers, since the format specified will treat them as integers regardless
// - $minutes could be more elegantly calculated as `($seconds % 3600) / 60`
// - $seconds can simply be calculated as `$seconds % 60`
