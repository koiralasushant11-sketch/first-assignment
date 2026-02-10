<?php

$currentMonth = date("F"); 

switch ($currentMonth) {
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is " . $currentMonth . " so I don't have any holidays.";
        break;
}

?>
 