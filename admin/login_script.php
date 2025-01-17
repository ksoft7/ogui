<?php
session_start();
require_once('../connectionx.php');
$error = '';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = 'Email and password are required!';
    } else {
        $sql = "SELECT * FROM admins WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user'] = $user['username'];
                $_SESSION['logged-in'] = true;

                header('Location: index.php');
            } else {
                $error = 'Invalid password!';
            }
        } else {
            $error = 'No account found with that email!';
        }
    }
}
?>