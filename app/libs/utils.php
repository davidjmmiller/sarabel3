<?php


function dd($var){
  echo '<pre>'.print_r($var,true).'</pre>';
  exit;
}

function t($key) {
  global $lang;
  global $config;
  if (isset($lang[$_COOKIE['lang']][$key])) {
    return $lang[$_COOKIE['lang']][$key];
  }
  else {
    return $lang[$config['lang']][$key];
  }
}

function set_cookie($cookie_name, $cookie_value){
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}