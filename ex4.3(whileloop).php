 <!-- WHILE LOOP : 1 TO N -->
    <h3>Print Numbers from 1 to n (While Loop)</h3>
    <form method="post">
        Enter n: <input type="number" name="limit"><br><br>
        <input type="submit" name="print_numbers" value="Print Numbers">
    </form>

    <?php
    if (isset($_POST['print_numbers'])) {
        $n = (int)$_POST['limit'];
        $i = 1;
        while ($i <= $n) {
            echo $i . " ";
            $i++;
        }
    }
    ?>