<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] == 0) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['fileUpload']['name']);
        
        if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadFile)) {
            echo "File is successfully uploaded.";
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "No file uploaded or there was an error.";
    }
}
?>