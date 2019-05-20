<!DOCTYPE html>
<html>
  <head>
    <title>BMI Calculator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="jumbotron">
      <div class="col-lg-6 offset-3">
        <h1 class="display-4">PHP BMI Calculator</h1>
        <p class="lead">Calculate your body mass index</p>
        <hr class="my-4">
        <p><em>Author: <a href="https://www.franklin.edu/about-us/faculty-staff/faculty-profiles/whittakt">Todd Whittaker</a></em></p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-3">
          <p>This program will calculate your body mass index and indicate what your range is.</p>
          <form action="bmi.php" method="post">
            <div class="form-group">
              <label for="height">Height (inches)</label>
              <input type="text" id="height" name="height" class="form-control" placeholder="Enter height" />
            </div>
            <div class="form-group">
              <label for="height">Weight (pounds)</label>
              <input type="text" id="weight" name="weight" class="form-control" placeholder="Enter weight" />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>