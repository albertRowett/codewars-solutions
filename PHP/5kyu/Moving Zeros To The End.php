<?php

function moveZeros(array $items): array
{
    for ($i = count($items) - 1; $i >= 0; $i--) {
        if ($items[$i] === 0 || $items[$i] === 0.0) {
            array_splice($items, $i, 1);
            array_push($items, 0);
        }
    }

    return $items;
}

// Notes:
// - Simpler to remove all zeros in one go and then add the number of zeros removed to the end; can be achieved with a combination of array_filter() and array_pad()
// - Could use unset() as an alternative to array_splice(), i.e. `unset($items[$i])`
