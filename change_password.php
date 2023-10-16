<?php
session_start();
include "admin/configure.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oldPassword = md5($_POST["oldPassword"]);
    $newPassword = md5($_POST["newPassword"]);
    $confirmPassword = md5($_POST["confirmPassword"]);

    // Check if the old password matches the user's current password (you may need to modify this based on your database structure)
    $userId = $_SESSION["id"]; // Use $_SESSION['id'] to fetch the user ID

    // Retrieve the user's stored password from the session
    if (isset($_SESSION['password'])) {
        $currentPassword = $_SESSION['password'];

        if ($oldPassword === $currentPassword) {
            // Old password matches, now check if new password and confirm password match

            if ($newPassword === $confirmPassword) {
                // Update the user's password in the database
                $updateQuery = "UPDATE users SET password = '$newPassword' WHERE id = $userId";
                $updateResult = mysqli_query($connection, $updateQuery);

                if ($updateResult) {
                    // Password changed successfully
                    echo '<script>alert("Password changed successfully.");</script>';
                    
                    // Redirect to the user's profile page after a delay
                    echo '<script>
                        setTimeout(function() {
                            window.location.href = "landing_page.php";
                        }, 1000); // Redirect after 2 seconds
                    </script>';
                    
                    exit();
                } else {
                    // Error updating the password
                    echo '<script>alert("Error updating password.");</script>';
                }
            } else {
                echo '<script>alert("New password and confirm password do not match.");</script>';
            }
        } else {
            echo '<script>alert("Old password is incorrect.");</script>';
        }
    } else {
        echo '<script>alert("Session password not found. Please log in again.");</script>';
    }
}
?>
