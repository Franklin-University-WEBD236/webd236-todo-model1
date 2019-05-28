<?php
  include_once('parts/utils.php');
  include_once('parts/db.php');
  $stu_num = safeParam("stu_num", "");

  $student = findStudentById($stu_num);
  $advisor = findEmployeeById($student['EMP_NUM']);


  function makeTextInput($arr, $fieldname, $label, $disabled="disabled") {
    echo "<div class=\"form-group\">\n";
    echo "<label for=\"{$fieldname}\">{$label}</label>\n";
    echo "<input type=\"text\" id=\"stu_fname\" name=\"{$fieldname}\" class=\"form-control\" placeholder=\"Enter {$label}\" value=\"{$arr[$fieldname]}\" {$disabled} />\n";
    echo "</div>";
  }

  include('parts/header.php');
?>

      <div class="row">
        <div class="col-lg-8 offset-2">
          <form action="index.php" method="post">
<?php
  makeTextInput($student, "STU_FNAME", "First name");
  makeTextInput($student, "STU_LNAME", "Last name");
  makeTextInput($student, "STU_INITIAL", "Middle initial");
  makeTextInput($student, "STU_DOB", "Date of birth");
  makeTextInput($student, "STU_HRS", "Hours");
  makeTextInput($student, "STU_CLASS", "Class");
  makeTextInput($student, "DEPT_CODE", "Department code");
  makeTextInput($student, "STU_PHONE", "Phone number");
?>
          </form>
    <a href="."><< Back</a>
        </div>
      </div>
<?php include('parts/footer.php'); ?>
