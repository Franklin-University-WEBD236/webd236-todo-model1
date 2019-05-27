<?php
  include('parts/header.php');
  include_once('parts/utils.php');
  include_once('parts/db.php');

  $first_name = safeParam("first_name", "");
  $last_name = safeParam("last_name", "");
?>
  
      <div class="row">
        <div class="col-lg-8 offset-2">
          <p>Which student do you want to find?</p>
          <form action="index.php" method="post">
            <div class="form-group">
              <label for="first_name">First name</label>
              <input type="text" min="1" id="first_name" name="first_name" class="form-control" placeholder="Enter first name" value="<?php echo $first_name?>"/>
            </div>
            <div class="form-group">
              <label for="last_name">Last name</label>
              <input type="text" min="1" id="last_name" name="last_name" class="form-control" placeholder="Enter last name" value="<?php echo $last_name?>"/>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
<?php if ($last_name || $first_name):
  $rows = findStudentByName($last_name, $first_name);
    if ($rows) :
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
  <tr>
    <td><?php echo "{$row['STU_FNAME']}, {$row['STU_LNAME']}" ?></td>
    <td>
      <div class="btn-toolbar">
        <button class="btn btn-secondary d-flex justify-content-center align-content-between mr-1 view-btn"><span class="material-icons">visibility</span>&nbsp;View</button>
        <button class="btn btn-secondary d-flex justify-content-center align-content-between mr-1 edit-btn"><span class="material-icons">mode_edit</span>&nbsp; Edit</button>
        <button class="btn btn-secondary d-flex justify-content-center align-content-between del-btn"><span class="material-icons">delete</span>&nbsp;Delete</button>
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
  
<?php include('parts/footer.php'); ?>
