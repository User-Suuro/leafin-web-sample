<?php
$file = 'status.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents($file, "CONNECTED: " . date("Y-m-d H:i:s"));
    echo "OK";
} else {
    if (file_exists($file)) {
        echo file_get_contents($file);
    } else {
        echo "Not Connected";
    }
}
?>
