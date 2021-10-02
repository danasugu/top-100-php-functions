<?php

//explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
//Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.

$array = [11.5, 'deer','mouse','lion','tiger','elephant','wolf','monkey','human'];

$colors = "orange, green, cyan, magenta, pink, violet";

$names = "ion|maria|gheorghe|vasile|sofica";

$colors_array= explode(",", $colors);
echo "<pre>";
print_r($colors_array);

$names_array = explode("|", $names);
echo "<pre>";
print_r ($names_array);

// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo "<br>";
echo $pieces[1]; // piece2
echo "<br>";
// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);

echo $home; // foo
echo "<br>";
echo $pass; // *