<?php
$BrowserDetected = $_SERVER['HTTP_USER_AGENT'];
echo "User Agent: " . $BrowserDetected . "<br><br>";

if (strpos($BrowserDetected, 'Firefe') !== false) {
    echo "Browser: Mozilla Firefox";
}
elseif (strpos($BrowserDetected, 'Safari') !== false) {
    echo "Browser: Safari ";
}
elseif (strpos($BrowserDetected, 'Chrome') !== false) {
    echo "Browser: Google Chrome";
}
else {
    echo "Browser: Not detected";
}
?>