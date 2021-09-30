<?php
// bool is_array (mixed $var)
// finds whether the given var is an array

$array = ['deer','mouse','lion','tiger','elephant','wolf','monkey','human', ['green','orange','pink']];

// $array=75;

if(is_array($array)){
  for($i=0; $i<count($array); $i++) {
      echo $array[$i] .'<br />';
}
} else {
      echo 'Not an array';
}