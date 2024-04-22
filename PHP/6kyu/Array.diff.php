<?php

function arrayDiff($a, $b) {
    for ($i = count($a) - 1; $i >= 0; $i--) {
      in_array($a[$i], $b) && array_splice($a, $i, 1);
    }
  
    return $a;
  }
