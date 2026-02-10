<footer>
    <p>&copy; 2025 Your Website. All rights reserved.</p>

    <?php
    
    $path = basename($_SERVER['PHP_SELF']);
    $lastModified = filemtime($path);
    echo "Latest Modified Time : " . date("F d, Y H:i:s", $lastModified) ;

    ?>
</footer>