<?php
session_start();

// Check if type is passed from JavaScript
if (isset($_POST['type'])) {
    $type = $_POST['type'];

    // Unset the appropriate session variable
    if ($type == 'error' && isset($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    } elseif ($type == 'success' && isset($_SESSION['success_message'])) {
        unset($_SESSION['success_message']);
    }
}
?>