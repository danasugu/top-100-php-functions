<?php 
// in_array(mixed $needle, array $haystack, bool $strict = false): bool
// Searches for needle in haystack using loose comparison unless strict is set.

$array = [11.5, 'deer','mouse','lion','tiger','elephant','wolf','monkey','human'];

if (in_array('11.5', $array, true)) {
    echo 'the number is in the array';
}