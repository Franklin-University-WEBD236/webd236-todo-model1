<?php
  include_once('parts/utils.php');
  include_once('parts/db.php');
  $stu_num = safeParam("stu_num", "");

  $student = findStudentById($stu_num);
  $advisor = findEmployeeById($student['EMP_NUM']);

  echo "Viewing {$stu_num}"
?>
