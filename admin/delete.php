<?php
include('../database/connection.php');
$id = $_POST['id'];
$current_page = $_GET['page'];


// Get the image path from the database
$query = "SELECT image_path FROM products WHERE ID = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$imagePath = $row['image_path'];

// Delete the record from the database
$query = "DELETE FROM products WHERE ID = '$id'";
if (mysqli_query($conn, $query)) {
    mysqli_query($conn, "ALTER TABLE products AUTO_INCREMENT = 1");

    // Delete the image file from the file system
    if (unlink("$imagePath")) {
        // Image file deleted successfully
    } else {
        // Error deleting image file
    }

header("Location: $current_page?message=delete_success");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);




?>