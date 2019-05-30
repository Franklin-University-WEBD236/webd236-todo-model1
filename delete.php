
<?php
  include_once('parts/db.php');
  include_once('parts/utils.php');

  $stu_num = safeParam('stu_num', '');
  $student_row = findStudentById($stu_num);

  if ($student_row) {
    echo "<pre>";
    print_r($student_row);
    echo "</pre>";
  }
  
?>