<?php 
$array = ['deer','mouse','lion','tiger','elephant','wolf','monkey','human'];

// substr(string $string, int $offset, ?int $length = null): string
//substr — Return part of a string

$text = "this is a string";
$extract = substr($text, 10,6);
echo $extract;
$extract = substr($text, -7,7);
echo $extract;