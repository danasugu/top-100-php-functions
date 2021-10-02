<?php

//explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
//Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.

$array = [11.5, 'deer','mouse','lion','tiger','elephant','wolf','monkey','human'];

$colors = "orange, green, cyan, magenta, pink, violet";

$names = "ion|maria|gheorghe|vasile|sofica";

$colors_array= explode(",", $colors);
echo "<pre>";
print_r($colors_array);

