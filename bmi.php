<?php
function safeParam($key, $default) {
  $val = "";
  if (isset($_POST[$key])) {
    $val = htmlentities(trim($_POST[$key]));
  } else if (isset($_GET[$key])) {
    $val = htmlentities(trim($_GET[$key]))
  }
  if ($val == "") {
    $val = $default;
  }
  return $val;
}

function categoryFor($bmi) {
    $result = "";
    if ($bmi < 16) {
        $result = "severely underweight";
    } else if ($bmi <= 18.5) {
        $result = "underweight";
    } else if ($bmi <= 25) {
        $result = "normal";
    } else if ($bmi <= 30) {
        $result = "overweight";
    } else {
        $result = "obese";
    }
    return $result;
}
