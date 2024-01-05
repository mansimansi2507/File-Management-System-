<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload and Download</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="body">
    <h1 class="head">File Management System</h1>
    <h1><hr class="line"></h1>
    <h2 class="subhead">Upload File</h2>
    <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
        <label class="formlabel" for="file">Choose File:</label>
        <input class="formin" type="file" name="file" id="file" required>
        <button class="sub" type="submit" name="submit">Upload</button>
    </form>

    <h2 class="subhead">Download File</h2>
    <table class="tab">
        <?php
        $directory = '/Users/mansi/uploads/';
        $files = glob($directory . '*.*');

        if ($files !== false) {
            foreach ($files as $file) {
                $filename = basename($file);
                $url = 'download.php?file=' . urlencode($filename);
                $url1 = 'opening.php?file=' . urlencode($filename);
                echo "<tr><td><label>$filename</label></td><td><a href='$url'><button class='down'>Download</button></a></td><td><a href='$url1'><button class='down'>View File</button></a></td><tr>";
            }
        } else {
            echo "<li>No files found</li>";
        }
        ?>
    </table>
</body>
</html>
