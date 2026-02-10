<!DOCTYPE html>
<html>


<body>

<form method="post" action="">
    Enter a number: 
    <input type="number" name="number" required>
    <input type="submit" value="Generate Table">
</form>

<?php

if (isset($_POST['number'])) {
    $n = (int)$_POST['number'];
    
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result<br>";
    }
    
}
?>

</body>
</html>