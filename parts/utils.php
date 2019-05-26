<?php
function safeParam($key, $default) {
  $val = "";
  if (isset($_POST[$key])) {
    $val = htmlentities(trim($_POST[$key]));
  } else if (isset($_GET[$key])) {
    $val = htmlentities(trim($_GET[$key]));
  }
  if ($val == "") {
    $val = $default;
  }
  return $val;
}
?>