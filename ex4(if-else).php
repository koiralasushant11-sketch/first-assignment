<!DOCTYPE html>
<html>
<body>

<h2>Voting Eligibility Check</h2>
<form method="get">
   First Name : <input type="text" name="First_Name">
    <br>
    age: <input type="text" name="age">
    <br>
    <input type="submit">
</form>

<?php

if (isset($_GET['age']) ) {
   
    $age = (int)$_GET['age']; 

 
    if ($age >= 20) {
        echo "You are eligible to vote.";
    } else {
        echo "You are NOT eligible to vote.";
    }
}
?>

</body>
</html>