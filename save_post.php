<?php
include "configure.php";

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

// Check if a file was uploaded
if (isset($_FILES['post_image'])) {
    $errors = array();
    $file_name = $_FILES['post_image']['name'];
    $file_size = $_FILES['post_image']['size'];
    $file_tmp = $_FILES['post_image']['tmp_name'];
    $file_type = $_FILES['post_image']['type'];
    $file_ext = strtolower(end(explode('.', $file_name))); // Convert extension to lowercase

    $allowed_extensions = array("jpeg", "jpg", "png");

    if (!in_array($file_ext, $allowed_extensions)) {
        $errors[] = "Wrong file type. Allowed file types: jpeg, jpg, png";
    }

    if ($file_size > 3 * 1024 * 1024) { // 3 MB (in bytes)
        $errors[] = "Please make the file less than 3 MB";
    }

    if (empty($errors)) {
        $new_name = time() . "-" . basename($file_name);
        $target = "uploaded_image/" . $new_name;

        if (move_uploaded_file($file_tmp, $target)) {
            // File upload successful
        } else {
            $errors[] = "Failed to move the uploaded file.";
        }
    } else {
        // Handle errors
        foreach ($errors as $error) {
            echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
        }
        exit();
    }
}

// Sanitize and escape user inputs
$post_title = mysqli_real_escape_string($connection, $_POST['post_title']);
$post_id = mysqli_real_escape_string($connection, $_POST['post_id']);
$post_desc = mysqli_real_escape_string($connection, $_POST['post_desc']);
$category = mysqli_real_escape_string($connection, $_POST['category']);
$date = date("D M, Y");
$author = $_SESSION['id'];

// Insert post data into the database
$query = "INSERT INTO post(post_id, post_desc, category, post_date, author, image, post_title) 
          VALUES ('$post_id', '$post_desc', '$category', '$date', '$author', '$new_name', '$post_title');";
$query .= "UPDATE category SET number_of_post = number_of_post + 1 WHERE category_id = $category";

if (mysqli_multi_query($connection, $query)) {
    header("location: post.php");
    exit();
} else {
    echo "Failed to insert data into the database.";
    exit();
}
?>
