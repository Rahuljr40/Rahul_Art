<?php
// Start the session
session_start();

// Check if the admin is logged in
if(isset($_SESSION['alogin'])) {
    // If logged in, destroy the session to log out
    session_destroy();
    
    // Display a logout message
    echo "<script>alert('Admin logout successful');</script>";
}

// Redirect the admin to index.php
header("location: index.php");
exit; // Ensure script execution stops after redirection
?>
