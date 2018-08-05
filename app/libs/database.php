<?php


function db_query($sql,$params = []){
  global $link;
  global $config;

  if (gettype($link) != 'object') {
    $link = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
  }

  if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  // Adding parameters
  $key = array_keys($params);
  $value = array_values($params);

  // Formatting parameters
  for ($i = 0; $i < count($value); $i++){
    $value[$i] = '"'.mysqli_escape_string($link,$value[$i]).'"';
  }

  $sql = str_replace($key,$value,$sql);

  if ($result = mysqli_query($link, $sql)) {
    $info = [];
    while ($row = mysqli_fetch_assoc($result)){
      $info[] = $row;
    }
    return $info;

    /* free result set */
    mysqli_free_result($result);
  }
  else {
    return false;
  }

}


function db_edit($sql,$params = []){
  global $link;
  global $config;

  if (gettype($link) != 'object') {
    $link = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
  }

  if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  // Adding parameters
  $key = array_keys($params);
  $value = array_values($params);

  // Formatting parameters
  for ($i = 0; $i < count($value); $i++){
    $value[$i] = '"'.mysqli_escape_string($link,$value[$i]).'"';
  }

  $sql = str_replace($key,$value,$sql);


  if ($result = mysqli_query($link, $sql)) {
    return mysqli_affected_rows($link);
  }
  else {
    return false;
  }

}