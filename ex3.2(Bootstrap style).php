<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Welcome Form</h2>

  <form method="get">
    <div class="form-group">
      <label>First Name:</label>
      <input type="text" name="First_Name" class="form-control">
    </div>

    <div class="form-group">
      <label>Last Name:</label>
      <input type="text" name="Last_Name" class="form-control">
    </div>

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