<?php
  include_once('parts/utils.php');
  include_once('parts/db.php');
  $stu_num = safeParam("stu_num", "");

  $student = findStudentById($stu_num);
  $advisor = findEmployeeById($student['EMP_NUM']);


  function makeTextInput($fieldname, $label) {
    echo "<div class=\"form-group\">\n"
    echo "<label for=\"stu_fname\">First name</label>"
    echo "<input type=\"text\" id=\"stu_fname\" name=\"stu_fname\" class=\"form-control\" placeholder=\"Enter first name" value=\"{$student['STU_FNAME']}" ?>"/>
  }
  include('parts/header.php');
?>

      <div class="row">
        <div class="col-lg-8 offset-2">
          <form action="index.php" method="post">
            <div class="form-group">
              <label for="stu_fname">First name</label>
              <input type="text" min="1" id="stu_fname" name="stu_fname" class="form-control" placeholder="Enter first name" value="<?php echo "{$student['STU_FNAME']}" ?>"/>
            </div>
            <div class="form-group">
              <label for="last_name">Last name</label>
              <input type="text" min="1" id="last_name" name="last_name" class="form-control" placeholder="Enter last name" value="<?php echo "{$student['STU_LNAME']}" ?>"/>
            </div>
            <div class="form-group">
              <label for="last_name">Last name</label>
              <input type="text" min="1" id="initial" name="initial" class="form-control" placeholder="Enter last name" value="<?php echo "{$student['STU_INITIAL']}" ?>"/>
            </div>
            <div class="form-group">
              <label for="last_name">Last name</label>
              <input type="text" min="1" id="last_name" name="last_name" class="form-control" placeholder="Enter last name" value="<?php echo "{$student['STU_LNAME']}" ?>"/>
            </div>
            <div class="form-group">
              <label for="last_name">Last name</label>
              <input type="text" min="1" id="last_name" name="last_name" class="form-control" placeholder="Enter last name" value="<?php echo "{$student['STU_LNAME']}" ?>"/>
            </div>
          </form>
        </div>
      </div>
                
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

<?php include('parts/footer.php'); ?>
