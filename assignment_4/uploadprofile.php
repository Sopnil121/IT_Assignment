<?php
$name = "";
$errors = [];
$uploadedFile = "";

// Check form submission
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // User Name Validation
    $name = trim(htmlspecialchars($_POST['username'] ?? ""));
    if ($name == "") {
        $errors[] = "Name is required";
    } elseif (strlen($name) < 3) {
        $errors[] = "Name must be at least 3 characters";
    }

    // File Validation
    if (!isset($_FILES['profile']) || $_FILES['profile']['error'] == 4) {
        $errors[] = "Profile picture is required";
    } else {
        $file = $_FILES['profile'];
        $allowed = ['jpg','jpeg','png','gif'];

        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $maxSize = 2 * 1024 * 1024; // 2MB

        if ($file['error'] != 0) {
            $errors[] = "File upload error code: " . $file['error'];
        }
        if (!in_array($ext, $allowed)) {
            $errors[] = "Invalid file type. Only JPG, JPEG, PNG, GIF allowed";
        }
        if ($file['size'] > $maxSize) {
            $errors[] = "File size exceeds 2MB limit";
        }
    }

    // Process Upload if no errors
    if (empty($errors)) {

        // Create uploads folder if not exist
        $uploadDir = "uploads";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755);
        }

        $destination = $uploadDir . "/" . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $destination)) {
            $uploadedFile = $destination;
        } else {
            $errors[] = "Failed to save the uploaded file";
        }
    }
}
?>

<h2>Profile Picture Upload</h2>

<!-- Show errors -->
<?php
if (!empty($errors)) {
    echo "<div style='color:red;'><b>Upload Errors:</b><br>";
    foreach ($errors as $e) {
        echo $e . "<br>";
    }
    echo "</div><br>";
}
?>

<!-- Upload Form -->
<form method="POST" enctype="multipart/form-data">
    Name: <br>
    <input type="text" name="username" value="<?php echo $name; ?>"><br><br>

    Profile Picture: <br>
    <input type="file" name="profile"><br><br>

    <button type="submit">Upload</button>
</form>

<?php
// Show success and file info
if ($uploadedFile != "") {
    echo "<h3>Profile Picture Uploaded Successfully!</h3>";
    echo "User Name: $name<br><br>";
    echo "<b>File Information:</b><br>";
    echo "File Name: " . basename($uploadedFile) . "<br>";
    echo "File Size: " . round(filesize($uploadedFile)/1024,2) . " KB<br>";
    echo "File Type: " . mime_content_type($uploadedFile) . "<br>";
    echo "Saved Location: $uploadedFile<br><br>";
    echo "<img src='$uploadedFile' width='200'>";
}
?>