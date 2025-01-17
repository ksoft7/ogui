
<?php

	switch ($some_content) {
		case 'topbar':
?>

			<section id="topbar" class="d-flex justify-content-between">
				<div class="main-header d-flex align-items-center justify-content-between px-4" >

					<a href="<?php echo $page_rel; ?>./" class="text-light fs-5">
                        <img src="../imgs/logo.svg" alt="logo" />
                    </a>

					<div class="logout-main">
						<a href="logout.php" class="text-white"><i class="fas fa-power-off text-white me-2"></i> Logout</a>
					</div>

					

				</div>
				<div class="hamburger" onclick="toggleMenu()">
					<i class="fa-solid fa-bars fa-lg text-white me-2"></i>
					</div>
					
			</section>
			<div class="nav-div">
				<div class="nav-div-sec">
					<ul class="nav-div-item">
						<li><a href="index.php" class="nav-div-link">Overview</a></li>
						<li><a href="view-user.php" class="nav-div-link">View user</a></li>
						<li><a href="logout.php" class="nav-div-link">Logout</a></li>
					</ul>
				</div>
			</div>

<?php
			break;


		case 'sidebar':
?>
			<section id="sidebar">
				<nav class="h-100 custom-bg-color p-md-3">
					<div class="user d-flex align-items-center p-md-3 mb-3">
					
						<div class="user-info">
							<h4> Welcome <?php echo $_SESSION['user']; ?>👋 </h4>
							
						</div>
					</div>
					<ul class="nav flex-column align-items-center align-items-md-start">
						<li>
							<a href="./" class="nav-link<?php if($active_bar == 'dashboard') { echo ' active'; } ?>"><i class="fas fa-home me-md-3 text-white"></i><span class="text-white">Overview</span></a>
						</li>
						<li>
							<a href="view-user.php" class="nav-link<?php if($active_bar == 'data') { echo ' active'; } ?>"><i class="fas fa-signal me-md-3 text-white"></i><span class="text-white">View users</span></a>
						</li>
						
					</ul>
				</nav>
			</section>

			

<?php
			break;

	}

?>


