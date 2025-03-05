### `upload.php` (Handles PDF Uploads)
```php
<?php
if ($_FILES["pdfFile"]["error"] == 0) {
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
    if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
        echo json_encode(["success" => true, "pdfPath" => $targetFile]);
    } else {
        echo json_encode(["success" => false, "message" => "Error moving file."]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Upload failed."]);
}
?>
```
