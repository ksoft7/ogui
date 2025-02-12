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
  <main class="content1">
    <!-------------- header ------------>
    <header>
      <nav>
        <img class="header_logo" src="./imgs/logo.svg" alt="logo" />
        <ul>
          <li>Home</li>
          <li>About Us</li>
          <div class="menuDropdown">
            <li>
              Get involved
              <img src="./imgs/Chevron_Down.svg" alt="dowm arrow" />
            </li>
            <span class="dropdown hideContents">
              <p>Donor</p>
              <p>Community member</p>
              <p>Partner</p>
              <p>Volunteer</p>
            </span>
          </div>
          <li>
            What We Do <img src="./imgs/Chevron_Down.svg" alt="dowm arrow" />
          </li>
          <li>Blog</li>
          <li>Contact Us</li>
          <button class="removeHam">
            <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/menu--v3.png" alt="menu--v3" />
          </button>
        </ul>
        <div class="menu_container" id="hamburger">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </nav>
    </header>
    <div class="overlay"></div>


    <!----------------- hero_section --------------->

    <section class="hero_section">
      <article class="heroContents">
        <article>
          <h1>
            Building <span style="color: #f7a234">Healthier-</span> <br />
            Communities, <br />
            <span style="color: #f7a234">One Step</span> At A Time
          </h1>
          <p>
            Take Action for Better Health: <br />Explore, Support, and Join Us
            in Making a Difference Today
          </p>
          <span>
            <a href="registration.php" style="width: 40%;">
              <button class="generalBtn">
                Get Involved
                <img src="./imgs/Arrow_Sub_Right_Down.svg" alt="Arrow_Sub_Right_Down icon" />
              </button>
            </a>
          </span>
        </article>

        <figure>
          <img class="hero-img1" src="./imgs/heroOne.jpg" alt="hero-img1" />
          <img class="hero-img2" src="./imgs/heroTwo.jpg" alt="hero-img2" />
        </figure>
      </article>

      <article class="heroContents1">
        <div>
          <img src="./imgs/heroIcon1.svg" alt="heroIcon1" />
          <span>
            <h3>Start donating</h3>
            <p>
              Make an impact today by contributing to our mission of
              empowering communities with better health and education. Your
              support transforms lives.
            </p>
          </span>
        </div>
        <div>
          <img src="./imgs/heroIcon2.svg" alt="heroIcon2" />
          <span>
            <h3>Quick fundraising</h3>
            <p>
              Join us in creating change by organizing or participating in a
              fundraising campaign. Together, we can make healthcare and
              education accessible to all.
            </p>
          </span>
        </div>
        <div>
          <img src="./imgs/heroIcon3.svg" alt="heroIcon3" />
          <span>
            <h3>Become a Volunteer</h3>
            <p>
              Be part of our journey to build healthier communities. Share
              your time, skills, and passion to make a difference in the lives
              of those in need.
            </p>
          </span>
        </div>
        <div>
          <img src="./imgs/heroIcon4.svg" alt="heroIcon4" />
          <span>
            <h3>Partner With us</h3>
            <p>
              Collaborate with us to expand our reach and amplify our impact.
              Let’s work together to bring sustainable health solutions to
              underserved communities.
            </p>
          </span>
        </div>
      </article>
    </section>

    <!--------------- about us -------------->
    <section class="about_us">
      <h1>About Us</h1>
      <article class="aboutContents">
        <figure>
          <img src="./imgs/aboutOne.jpg" alt=" aboutUsimg" />
        </figure>

        <article>
          <div>
            <h4>
              The OGERI Health Foundation is committed to improving health and
              empowering communities across Africa, starting with our
              impactful initiatives in Nigeria. Through health education,
              disease prevention, and innovative healthcare programs, we
              strive to address critical health challenges and create lasting
              change. Our journey began in Southeastern Nigeria, where we
              launched community outreach programs focused on blood pressure
              screenings, health education, and empowering individuals to take
              control of their health.
            </h4>
          </div>

          <div class="textCov">
            <img src="./imgs/abicon1.svg" alt="img placeholder" />
            <div>
              <h3>Our Mission</h3>
              <p>
                To improve health outcomes and empower communities across
                Africa, starting in Nigeria, by providing accessible
                healthcare solutions, advancing health education, and
                promoting preventive care to build healthier and self-reliant
                futures for all.
              </p>
            </div>
          </div>
          <div class="textCov">
            <img src="./imgs/abicon2.svg" alt="img placeholder" />
            <div>
              <h3>Our Vision</h3>
              <p>
                A world where every individual has the knowledge, resources,
                and support to take control of their health, fostering
                empowered communities and healthier generations.
              </p>
            </div>
          </div>

          <span>
            <button class="generalBtn">
              Learn More
              <img src="./imgs/Arrow_Sub_Right_Down.svg" alt="Arrow_Sub_Right_Down icon" />
            </button>
          </span>
        </article>
      </article>
    </section>

    <section class="comingSoon_sec">
      <img class="posTop" src="./imgs/comingSoon.svg" alt="coming soon img" />
      <article>
        <img src="./imgs/logo2.svg" alt="logo img" />
        <h2>Complete website Coming Soon!</h2>
        <p>
          Stay tuned for our full website launch to learn more about our
          mission, success stories, and how you can get involved. Together, we
          can build healthier futures.
        </p>

        <form action="#">
          <input type="email" placeholder="Enter your email" />
          <button type="submit">Notify Me</button>
        </form>
        <img class="posBot" src="./imgs/Polygon 1.svg" alt="Polygon" />
      </article>
    </section>

    <!--------------------- footer -------------------->
    <footer>
      <article class="footerCont1">
        <div>
          <img class="logoImg" src="./imgs/logo2.svg" alt="logo img" />
          <h2>Ogeri Health Foundation</h2>
          <p>
            Empowering communities, improving lives, building healthier
            futures.
          </p>
        </div>

        <ul>
          <h4>Company</h4>

          <a href="#">
            <li>Home</li>
          </a>
          <a href="#">
            <li>About Us</li>
          </a>
          <a href="#">
            <li>get involved</li>
          </a>
          <a href="#">
            <li>what we do</li>
          </a>
          <a href="#">
            <li>Blog</li>
          </a>
          <a href="#">
            <li>Contact Us</li>
          </a>
        </ul>

        <ul>
          <h4>Links</h4>

          <a href="#">
            <li>Events</li>
          </a>
          <a href="#">
            <li>Testimonials</li>
          </a>
          <a href="#">
            <li>Projects</li>
          </a>
          <a href="#">
            <li>FAQs</li>
          </a>
          <a href="#">
            <li>Get Medical support</li>
          </a>
        </ul>

        <div>
          <h3>subscribe to our newsletter</h3>
          <form action="#">
            <input type="email" placeholder="Email" />
            <button type="button">
              <img src="./imgs/exitIcon.svg" alt="exitIcon" />
            </button>
          </form>

          <span>
            <a href="#"><img src="./imgs/linkedin.svg" alt="linkedin icon" /></a>
            <a href="#"><img src="./imgs/facebook.svg" alt="facebook icon" /></a>
            <a href="#"><img src="./imgs/instagram.svg" alt="instagram icon" /></a>
            <a href="#"><img src="./imgs/twitter.svg" alt="twitter icon" /></a>
          </span>
        </div>
      </article>

      <article class="footerCont2">
        <div>
          <h3>c 2024 Ogeri Health Foundation All rights reserved</h3>
          <span>
            <p>Terms of service</p>
            <p>Privacy policy</p>
          </span>
        </div>
      </article>
    </footer>
  </main>


  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const menuDropdown = document.querySelector(".menuDropdown li");
      const dropdown = document.querySelector(".dropdown");
      menuDropdown.addEventListener("click", () => {
        menuDropdown.classList.toggle("rotAng");
        dropdown.classList.toggle("hideContents");
        dropdown.style.animation = "slideUp 0.5s forwards";
      });

      const hamburger = document.querySelector("#hamburger");
      const header = document.querySelector("header");
      const navContent = document.querySelector("header nav ul");
      const removeHam = document.querySelector(".removeHam");
      const overlay = document.querySelector(".overlay");



      hamburger.addEventListener("click", () => {
        navContent.style.display = "block";
        navContent.style.animation = "slideIn 0.5s forwards";
        overlay.style.display = "block";
      });

      removeHam.addEventListener("click", () => {
        navContent.style.display = "";
        overlay.style.display = "none";
      });

      overlay.addEventListener("click", () => {
        navContent.style.display = "";
        overlay.style.display = "none";
      });

      //checkbox for userTypes options

      const volunteerOption = document.getElementById("volunteerOption");
      const cvUploadContainer = document.getElementById("cvUploadContainer");

      volunteerOption.addEventListener("change", (event) => {
        if (event.target.checked) {
          cvUploadContainer.style.display = "block";
        } else {
          cvUploadContainer.style.display = "none";
        }
      });

      // Add interactivity for better user experience
      const checkboxes = document.querySelectorAll('input[name="userType"]');
      checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", () => {
          // Uncheck all other checkboxes when one is selected
          checkboxes.forEach((cb) => {
            if (cb !== checkbox) cb.checked = false;
          });

          // If "Volunteer" is unchecked, hide the CV upload input
          if (!volunteerOption.checked) {
            cvUploadContainer.style.display = "none";
          }
        });
      });
    });

  </script>
</body>

</html>