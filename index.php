### `index.php` (Main UI and PDF Viewer)
```php
<?php
include 'db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ Generator</title>
</head>
<body>
    <h2>Upload PDF</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="pdfFile" accept="application/pdf" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
```
