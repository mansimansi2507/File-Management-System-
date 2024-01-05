<?php
if (isset($_GET['file'])) {
    $filename = $_GET['file'];
    $filepath = '/Users/mansi/uploads/' . $filename;

    if (file_exists($filepath)) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime_type = finfo_file($finfo, $filepath);
        finfo_close($finfo);

        header('Content-Type: ' . $mime_type);
        header('Content-Disposition: inline; filename="' . $filename . '"');
        readfile($filepath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "Invalid request.";
}
?>