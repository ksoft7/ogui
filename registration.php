<?php
session_start();
?>

<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ogeri Health Foundation - Home</title>
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="./signup.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <main class="content2">
    <section class="posLines">
      <article class="titlehol">
        <img class="tripLine1" src="./imgs/linesTri.svg" alt="triple lines" />
        <img class="tripLine2" src="./imgs/linesTri.svg" alt="triple lines" />
      </article>
    </section>
    
    <div class="coverReg">
      <section class="registerForm">
        <h1>
          OGERI <span style="color: #ff6e3b">HEALTH</span> <br />
          FOUNDATION
        </h1>
        <p class="closeoo">&times;</p>
        <article>
          <img class="logo1" src="./imgs/logo2.svg" alt="logo img" />
          <span>
            <div>
              <img src="./imgs/straigthLine.svg" alt="straigthLine img" />
            </div>
            <div class="signup">
              <h2>Sign Up</h2>
              <p>Register now for newsletters and updates.</p>
            </div>
          </span>

          <!-- Display error messages -->
         

        </article>
        <?php
// Display error messages if any
        if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
            echo '<div class="alert error">';
            echo '<span class="close-btn" onclick="closeMessage(\'error\')">&times;</span>';  // Close button
            echo '<ul>';
            foreach ($_SESSION['errors'] as $error) {
                echo '<li>' . htmlspecialchars($error) . '</li>';
            }
            echo '</ul>';
            echo '</div>';
        }

        // Display success message if any
        if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {
            echo '<div class="alert success">';
            echo '<span class="close-btn" onclick="closeMessage(\'success\')">&times;</span>';  // Close button
            echo htmlspecialchars($_SESSION['success_message']);
            echo '</div>';
        }
        ?>

        <form action="user-handler.php" method="POST" id="registrationForm" enctype="multipart/form-data">
          <div>
              <h3><img src="./imgs/nameIcon.svg" alt="name icon" /> Name</h3>
              <span>
                  <input type="text" name="first_name" placeholder="First Name" required />
                  <input type="text" name="last_name" placeholder="Last Name" required />
              </span>
          </div>
          <span>
              <h3>
                  <img src="./imgs/envelop.svg" alt="envelop icon" /> E-mail
              </h3>
              <input type="email" name="email" placeholder="Enter Your E-mail" required />
          </span>
          <span>
              <h3>
                  <img src="./imgs/nameIcon.svg" alt="user type icon" />
                  Select User Type/Role
              </h3>
              <div>
                  <label>
                      <input type="checkbox" name="user_type[]" value="Donor" /> Donor
                  </label>
                  <label>
                      <input type="checkbox" name="user_type[]" value="Volunteer" id="volunteerOption" /> Volunteer
                  </label>
                  <label>
                      <input type="checkbox" name="user_type[]" value="Community Member" /> Community Member
                  </label>
                  <label>
                      <input type="checkbox" name="user_type[]" value="Partner" /> Partner
                  </label>
              </div>
          </span>
          <span id="cvUploadContainer" style="display: none;">
              <h3>
                  <i class="fa fa-upload"></i>
                  Upload Your CV
              </h3>
              <input type="file" name="cv_upload" id="cvUpload" />
          </span>
          <span class="or">
              <div></div>
              <p>Or</p>
              <div></div>
          </span>
          <button class="google">
              <img src="./imgs/google.svg" alt="Google icon" /> Sign in with Google
          </button>
          <button type="submit" class="register" name="submit">Register Now</button>
      </form>
      </section>
    </div>
  </main>
  <script>
    const volunteerOption = document.getElementById("volunteerOption");
    const cvUploadContainer = document.getElementById("cvUploadContainer");

    volunteerOption.addEventListener("change", (event) => {
      if (event.target.checked) {
        cvUploadContainer.style.display = "block";
      } else {
        cvUploadContainer.style.display = "none";
      }
    });

    const closeBtns = document.querySelectorAll('.close-btn');

// Add event listener to each close button
closeBtns.forEach(function(button) {
    button.addEventListener('click', function() {
        // Find the parent alert container and hide it
        this.parentElement.style.display = 'none';
    });
});

function closeMessage(type) {
    // Remove the message element
    const alertElement = document.querySelector(`.alert.${type}`);
    if (alertElement) {
        alertElement.style.display = 'none';  // Hide the alert box
    }

    // Send an AJAX request to unset the session variable
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'unset-session.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('type=' + type);
}
  </script>
</body>
</html>
