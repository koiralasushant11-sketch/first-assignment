<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Form Submission Page</title>

</head>
<body>

  <form method="get">
      <label>First Name:</label>
        <input type="text" name="First_Name" class="form-control">
      <label>Last Name:</label>
        <input type="text" name="Last_Name" class="form-control">

    <button type="submit" class="btn btn-success">Submit</button>
    
  </form>

  <br>

  <?php
  if (isset($_GET['First_Name']) && isset($_GET['Last_Name'])) {
      echo "<h3>Hello " . $_GET['First_Name'] . " " . $_GET['Last_Name'] . ",
      you are welcome to my site.</h3>";
  }
  ?>
</div>

</body>
</html>