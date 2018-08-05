<?php


function dd($var){
  echo '<pre>'.print_r($var,true).'</pre>';
  exit;
}

function t($key) {
  global $lang;
  return $lang[$_SESSION['lang']][$key];
}
