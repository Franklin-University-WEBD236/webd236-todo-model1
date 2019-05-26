<?php
  include('parts/header.php');
  include_once('parts/utils.php');
  include_once('parts/db.php');

  $first_name = safeParam("first_name", "");
  $last_name = safeParam("last_name", "");
?>
  
      <div class="row">
        <div class="col-lg-8 offset-2">
          <h1 class="display-4">MicroUniversity Database</h1>
          <p class="lead">Find a student</p>
          <p><em>Author: <a href="https://www.franklin.edu/about-us/faculty-staff/faculty-profiles/whittakt">Todd Whittaker</a></em></p>
          <hr>
        </div>
      </div>
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
?>
      <div class="row">
        <div class="col-lg-6 offset-3">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th>First</th>
              <th>Last</th>
            </tr>
          </thead>
          <tbody>
<?php foreach ($rows as $row): ?>
  <tr>
    <td>
      <?php echo 
      echo "<tr><td>{$row['STU_FNAME']}</td><td><a href=\"view.php?id={$row['STU_NUM']}\">{$row['STU_LNAME']}</a></td></tr>\n";
    }
?>
          </tbody>
        </table>
      </div>
    </div>
<?php endif; ?>
  
<?php include('parts/footer.php'); ?>
