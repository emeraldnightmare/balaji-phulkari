<?php
include('../database/connection.php');
$id = $_POST['id'];
$current_page = $_GET['page'];




// Delete the record from the database
$query = "DELETE FROM user_messages WHERE ID = '$id'";
if (mysqli_query($conn, $query)) {
    mysqli_query($conn, "ALTER TABLE user_messages AUTO_INCREMENT = 1");

header("Location: $current_page?message=delete_success");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);




?>