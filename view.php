<?php
  include_once('parts/utils.php');
  include_once('parts/db.php');
  $stu_num = safeParam("stu_num", "");

  $student = findStudentById($stu_num);
  $advisor = findEmployeeById($student['EMP_NUM']);
?>
  
<h1>View a student</h1>
<div class='display'>
    <label>First name:</label>
    <div><?php echo "{$student['STU_FNAME']}"; ?></div>
    <label>Last name:</label>
    <div><?php echo "{$student['STU_LNAME']}"; ?></div>
    <label>Middle initial:</label>
    <div><?php echo "{$student['STU_INITIAL']}"; ?></div>
    <label>Birthdate:</label>
    <div><?php echo "{$student['STU_DOB']}"; ?></div>
    <label>Credits:</label>
    <div><?php echo "{$student['STU_HRS']}"; ?></div>
    <label>Class:</label>
    <div><?php echo "{$student['STU_CLASS']}"; ?></div>
    <label>Department:</label>
    <div><?php echo "{$student['DEPT_CODE']}"; ?></div>
    <label>Phone:</label>
    <div><?php echo "{$student['STU_PHONE']}"; ?></div>
    <label>Advisor:</label>
    <div><?php echo "{$advisor['EMP_FNAME']} {$advisor['EMP_LNAME']}"; ?></div>
</div>
    <a href="."><< Back</a>
?>
