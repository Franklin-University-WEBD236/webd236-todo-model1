<?php
  include('parts/header.php');
  include_once('parts/utils.php');
  include_once('parts/db.php');

  $description = safeParam("description", "");

  if ($description) {
    addToDo($description);
  }

  $rows = findCurrentToDos();
?>
  
      <div class="row">
        <div class="col-lg-8 offset-2">
          <p>Add a new thing to do</p>
          <form action="index.php" method="post">
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" min="1" id="description" name="description" class="form-control" placeholder="Enter discription" value=""/>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
<?php
  if ($last_name || $first_name):
    $rows = findStudentByName($last_name, $first_name);
    // could use findStudentByName2 or findStudentByName3
    $logger->debug($rows);
    if ($rows):
?>
      <div class="row">
        <div class="col-lg-8 offset-2">
          
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th>Name</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
<?php foreach ($rows as $row): ?>
  <?php $logger->debug("found student {$row['STU_FNAME']}, {$row['STU_LNAME']}"); ?>
  <tr>
    <td><?php echo "{$row['STU_LNAME']}, {$row['STU_FNAME']}" ?></td>
    <td>
      <div class="btn-toolbar">
        <button class="btn btn-secondary d-flex justify-content-center align-content-between mr-1 addclickhandler" action="view.php" stu_num="<?php echo "{$row['STU_NUM']}"?>"><span class="material-icons">visibility</span>&nbsp;View</button>
        <button class="btn btn-secondary d-flex justify-content-center align-content-between mr-1 addclickhandler" action="edit.php" stu_num="<?php echo "{$row['STU_NUM']}"?>"><span class="material-icons">mode_edit</span>&nbsp; Edit</button>
        <button class="btn btn-secondary d-flex justify-content-center align-content-between addclickhandler" action="delete.php" stu_num="<?php echo "{$row['STU_NUM']}"?>"><span class="material-icons">delete</span>&nbsp;Delete</button>
      </div>
    </td>
  </tr>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
<?php else: ?>
      <div class="row">
        <div class="col-lg-8 offset-2">
          <p>No results found</p>
        </div>
      </div>
<?php
    endif;
  endif;
?>
<!-- see the "custom.js" file for how this form gets modified by JavaScript
     using custom attributes on the buttons in the table -->
<form action="this_is_replaced_by_javascript" method="post" id="studentform">
  <input type="hidden" id="stu_num" name="stu_num" value="">
  <input type="hidden" name="first_name_holder" value="<?php echo $first_name ?>">
  <input type="hidden" name="last_name_holder" value="<?php echo $last_name ?>">
</form>
  
<?php include('parts/footer.php'); ?>
