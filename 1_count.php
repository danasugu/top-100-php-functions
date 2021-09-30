<?php 
$array = ['deer','mouse','lion','tiger','elephant','wolf','monkey','human',
['green','orange','pink']];
echo count($array, COUNT_NORMAL);
echo  '//Normal count<br>';
echo count($array, COUNT_RECURSIVE);
echo  '//Recursive count<br>';
echo '<br>';
// die;
for($i=0;$i<count($array);$i++) {
  echo $array[$i] .'<br>';
}