<!DOCTYPE html>
<html>
  <head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="content">
      <h1>BMI Calculator</h1>
      <p><em>Author: Todd Whittaker</em></p>
      <p>This program will calculate your body mass index and
         indicate what your range is.</p>
      <form action="bmi.php" method="post">
        <fieldset>
          <legend>Input your data</legend>
          <label for="height">Height (inches):</label>
          <input type="text" id="height" name="height" /><br />
          <label for="height">Weight (pounds):</label>
          <input type="text" id="weight" name="weight" /><br />
          <label>&nbsp;</label>
          <input type="submit" value="Submit" /><br />
        </fieldset>
      </form>
    </div>
  </body>
</html>