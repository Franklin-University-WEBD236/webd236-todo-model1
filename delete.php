
<?php
  include_once('parts/db.php');
  include_once('parts/utils.php');
  
  function deleteStudentById($id) {
    global $db;
    $st = $db -> prepare('DELETE FROM STUDENT WHERE STU_NUM = ?');
    $st -> bindParam(1, $id);
    return $st -> execute();
  }

  $stu_num = safeParam('stu_num', '');
  $first_name = safeParam('first_name_holder', "");
  $last_name = safeParam('last_name_holder', "");
                          
  $result = deleteStudentById($stu_num);
  if (!$result) {
    echo "no such student id found.";
  }
  header("Location: index.php?first_name=$first_name&last_name=$last_name");
  
?>