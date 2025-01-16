<?php
    session_start();
    if (!isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
            // Redirect to login page if not logged in
        header("location: login.php");
        exit();
    }
    $page_title = "Dashboard - B-cloud";

    $page_description = "";

    $page_rel = '../';

    $page_name = 'dashboard';

    $page_author = 'Praise';

    $customs = array(
                   "stylesheets" => ["index.css"],
                   "scripts" => []
                );
                require_once($page_rel.'connectionx.php');
$sql = "SELECT COUNT(*) AS total FROM users";
$result = $conn->query($sql);

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


</head>
<body>

    <!-- Topbar -->
    <?php
        $some_content = "topbar";
        include $page_rel.'admin/some_content.php';
    ?>


    <main class=" main-flex">

        <!-- Sidebar -->
        <div class="sidebar" style="width: 18%; ">
        <?php
			$some_content = "sidebar";
			$active_bar = "data";
			include $page_rel.'admin/some_content.php';
		?>
        </div>
 
        <!-- py-4 px-md-4
        flex-grow-1 -->
        <!-- Content -->
        <section class="main-content  ">
                <div class="text-center sec-div">
                    <div class="sec-div2">
                        <h1>Total registration</h1>
                        <div>
                            <p><?php
                        if ($result->num_rows > 0) {
                     $row = $result->fetch_assoc();
                    
                              echo  "<h2>".$row["total"]."</h2>";
                        }
                                ?></p>
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