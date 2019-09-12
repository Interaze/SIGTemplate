<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    echo "There was an error" . PHP_EOL;
    exit;
}

?>