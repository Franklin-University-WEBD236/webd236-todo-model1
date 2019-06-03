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
      <div class="row">
        <div class="col-lg-8 offset-2">
<?php if ($rows): ?>
          <ol>
<?php foreach ($rows as $row): ?>
            <li><?php echo "{$row['description']}"; ?></li>
<?php endforeach; ?>
          </ol>
<?php else: ?>
          <p>No current todos found</p>
<?php endif; ?>
        </div>
      </div>
  <?php include('parts/footer.php'); ?>
