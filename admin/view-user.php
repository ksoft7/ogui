<?php
session_start();
if (!isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
    // Redirect to login page if not logged in
    header("location: login");
    exit();
}
$page_title = "Dashboard - Ogeri Health Foundation";
$page_description = "";
$page_rel = '../';
$page_name = 'dashboard';
$page_author = 'Praise';

$customs = array(
    "stylesheets" => ["index.css"],
    "scripts" => []
);
require_once($page_rel . 'connectionx.php');

// Fetch all users from the database
$selectx = "SELECT * FROM users ORDER BY id DESC";
$checkselectx = $conn->query($selectx);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <script src="https://kit.fontawesome.com/2e84febe53.js" crossorigin="anonymous"></script>
    <title>Ogeri Health Foundation | Dashboard</title>
    <link rel="icon" href="../imgs/logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>

<!-- Topbar -->
<?php
$some_content = "topbar";
include $page_rel . 'admin/some_content.php';
?>

<main class=" main-flex">
    <!-- Sidebar -->
    <div class="sidebar" style="width: 18%;">
        <?php
        $some_content = "sidebar";
        $active_bar = "data";
        include $page_rel . 'admin/some_content.php';
        ?>
    </div>

    <!-- Content -->
    <section class="main-content">
        <div class="div2">
            <div class="container">
                <div>
                    <div class="flex-div3 mb-4">
                        <h1>Form Submission</h1>
                        <h1><?php echo date('d-m-Y'); ?></h1>
                    </div>
                    <hr>

                    <div class="table-responsive">
                    <table class='table table-striped'>
    <thead>
        <tr>
            <th>S/N</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>User Type</th>
            <th>CV (Download)</th>
        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sn = 1;
                            while ($row = $checkselectx->fetch_assoc()) {
                                $full_name = $row['first_name'] . " " . $row['last_name'];
                                $email = $row['email'];
                                $user_type = implode(", ", explode(",", $row['user_type'])); // Convert to readable string
                                $cv_path = $row['cv_upload_path'] ?? null; // Path to uploaded CV
                            ?>
                            <tr>
                                <th><?php echo $sn++; ?></th>
                                <td><?php echo htmlspecialchars($full_name); ?></td>
                                <td><a href="mailto:<?php echo htmlspecialchars($email); ?>" class="text-dark"><?php echo htmlspecialchars($email); ?></a></td>
                                <td><?php echo htmlspecialchars($user_type); ?></td>
                                <td>
                                    <?php if (in_array("Volunteer", explode(",", $row['user_type'])) && !empty($cv_path)): ?>
                                        <a href="<?php echo htmlspecialchars($cv_path); ?>" class="btn btn-primary btn-sm" download>Download CV</a>
                                    <?php else: ?>
                                        <span class="text-muted">No CV</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
function toggleMenu() {
    var navDiv = document.querySelector('.nav-div');
    navDiv.classList.toggle('active');  // Toggle the 'active' class on the div
}
</script>

</body>
</html>
