<?php
session_start();
require_once('../connectionx.php');

// Initialize error variable
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation
    if (empty($email) || empty($password)) {
        $error = 'Email and password are required!';
    } else {
        $sql = "SELECT * FROM admins WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if ($password == $user['password']) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user'] = $user['first_name'] . ' ' . $user['last_name'];
                $_SESSION['logged-in'] = true;

                header('Location: index.php');
                exit();
            } else {
                $error = 'Invalid password!';
            }
        } else {
            $error = 'No account found with that email!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin</title>

	<link rel="icon" href="../imgs/logo.svg">
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sign Up</title>
</head>
<body class="body">

<div class="container1">
    <div class="message" style="display: <?php echo !empty($error) ? 'block' : 'none'; ?>">
        <span class="close" onclick="this.parentElement.style.display='none'">x</span>
        <?php echo $error; ?>
    </div>
    <div class="logo">
            <img src="../imgs/logo.svg" alt="Logo">
        </div>

    <h2>Login</h2>
    <form action="" method="POST">
    <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        
</div>

</body>
</html>