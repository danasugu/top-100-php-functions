<?php 
// in_array(mixed $needle, array $haystack, bool $strict = false): bool
// Searches for needle in haystack using loose comparison unless strict is set.

$array = [11.5, 'deer','mouse','lion','tiger','elephant','wolf','monkey','human'];

if (in_array('11.5', $array, true)) { // strict is true => '11.5''!==11.5 - different type
    echo 'the number is in the array';
}