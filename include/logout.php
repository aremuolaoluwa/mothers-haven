<?php
if(isset($_POST['logout'])) {
  session_start(); // Start the session
  session_destroy(); // Destroy all session data
  header("Location: ../index.php"); // Redirect to login page
  exit; // Exit the script
}
?>