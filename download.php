<?php
if (isset($_GET['file'])) {
    $filename = $_GET['file'];
    $filepath = '/Users/mansi/uploads/' . $filename;

    if (file_exists($filepath)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        readfile($filepath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "Invalid request.";
}
?>