<?php
session_start();
// Initialize an array to hold errors and success messages
$errors = [];
$success_message = "";

// Database connection (adjust with your credentials)
include("connectionx.php");

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Capture form data and sanitize inputs
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $user_type = $_POST['user_type'] ?? [];
    $cv_upload = $_FILES['cv_upload'] ?? null;

    // Validate fields
    if (empty($first_name)) {
        $errors[] = "First name is required.";
    }
    if (empty($last_name)) {
        $errors[] = "Last name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email address is required.";
    }
    if (empty($user_type)) {
        $errors[] = "Please select at least one user type.";
    }

    // Check if email already exists
    if (empty($errors)) {
        $checkEmailQuery = "SELECT id FROM users WHERE email = ?";
        $stmt = $conn->prepare($checkEmailQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $errors[] = "The email address is already registered. Please use a different email.";
        }
        $stmt->close();
    }

    // Handle file upload if it's a volunteer
    $cv_upload_path = null;
    if (empty($errors) && in_array("Volunteer", $user_type) && isset($cv_upload) && $cv_upload['error'] == 0) {
        // Validate file type
        $allowed_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE); 
        $fileMimeType = finfo_file($finfo, $cv_upload['tmp_name']);
        finfo_close($finfo);

        if (!in_array($fileMimeType, $allowed_types)) {
            $errors[] = "Invalid file type. Only PDF and DOC files are allowed for CV upload.";
        }

        // Validate file size (optional: 5MB maximum)
        if ($cv_upload['size'] > 5 * 1024 * 1024) { // 5MB
            $errors[] = "The file size is too large. Maximum allowed size is 5MB.";
        }

        // Proceed with upload if no errors
        if (empty($errors)) {
            $upload_dir = 'uploads/';
            $cv_upload_path = $upload_dir . basename($cv_upload['name']);

            // Move the uploaded file to the server
            if (!move_uploaded_file($cv_upload['tmp_name'], $cv_upload_path)) {
                $errors[] = "Error uploading CV.";
            }
        }
    }

    // If no errors, insert the data into the database
    if (empty($errors)) {
        $user_type_str = implode(",", $user_type); // Store multiple roles as a comma-separated string
        $insertQuery = "INSERT INTO users (first_name, last_name, email, user_type, cv_upload_path) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sssss", $first_name, $last_name, $email, $user_type_str, $cv_upload_path);

        if ($stmt->execute()) {
            $success_message = "Registration successful. Check your email for confirmation!";
        } else {
            $errors[] = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    // Close the database connection
    $conn->close();

    // Store error or success messages in the session to display them after redirection
    session_start();
    $_SESSION['errors'] = $errors;
    $_SESSION['success_message'] = $success_message;

    // Redirect to the registration page
    header("Location: registration.php");
    exit;
}
?>
