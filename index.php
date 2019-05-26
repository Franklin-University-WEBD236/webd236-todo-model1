<?php include('parts/header.php'); ?>
  
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
          <form action="bmi.php" method="get">
            <div class="form-group">
              <label for="height">Height (inches)</label>
              <input type="number" min="1" id="height" name="height" class="form-control" placeholder="Enter height" />
            </div>
            <div class="form-group">
              <label for="height">Weight (pounds)</label>
              <input type="number" min="1" id="weight" name="weight" class="form-control" placeholder="Enter weight" />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
<?php include('parts/footer.php');