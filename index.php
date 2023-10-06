<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link src="script.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <!-- testiminials -->
  <link rel="stylesheet" href="swiper-bundle.min.css" />
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <!--  -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/highlights.css">



  <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
  <!--  -->
  <!-- <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" /> -->

  <!-- <meta name="apple-mobile-web-app-title" content="CodePen"> -->

  <!-- <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" /> -->

  <!-- <link rel="canonical" href="https://codepen.io/pizzabote/pen/xxxXmXN"> -->

  <title>Vardhaman College Magazine</title>


</head>

<body>

  <div class="hero">
    <nav>
      <!-- <h2 class="logo">VMEG <span>Magazine</span></h2> -->
    <h2 class="logo"><img src="image1.png" width="300px" height="180px" alt=""></h2>
      <ul style="font-size:17.5px;">
        <li><a href="#home">Home</a></li>
        <li><a href="blogs.php">Blogs</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="clubs.php">Student Clubs</a></li>
        <li><a href="cform.php">Contact Us</a></li>
      </ul>
      <button id="loginButton">Login</button>
    </nav>
  </div>
  <!-- <script>
        function redirectToPage() {
          window.location.href = "login.html";
        }
    </script> -->
  <script>
    // Add event listener to the login button
    document.getElementById("loginButton").addEventListener("click", function () {
      // Redirect to register.php
      window.location.href = "http://localhost/project/register.php";
    });
  </script>
  <div class="welcome">
    <?php if (isset($_SESSION['username'])): ?>
      <p align="center" style="font-size:1.5rem;">Welcome <strong>
          <?php echo $_SESSION['username']; ?>
        </strong> 
        <a href="index.php?logout='1'" style="color:orange; text-decoration: none;">logout</a> </p>
      <!-- <p>Explore the magazine now!! <a href="index.html">Click here</a></p> -->
      <!-- <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p><br> -->
    <?php endif ?>
  </div>
  <section class="home" id="home">
    <div class="content">
      <!-- notification message -->
      <!-- <?php if (isset($_SESSION['success'])): ?>
      <div class="error success" >
        <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?> -->

      <!-- logged in user information -->


    </div>
    <div class="home-content">
      <h2>Welcome to</h2>
      <h2>The Campus Quill</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita libero deleniti iste, fugiat hic assumenda
        cupiditate quibusdam, ipsa sed cumque similique? Minima cupiditate aliquid harum quam eos quos voluptas commodi
        et temporibus, doloribus voluptatibus illo, necessitatibus quibusdam porro 
      </p>
    </div>
    <div class="home-img">
      <img src="giphy.gif" alt="">
    </div>
  </section>

  <!-- highlights  start-->
  <div class="highlights">
    <center>

      <h1>Highlights</h1>
      <p>
        As you navigate our student magazine website, we want to ensure you don't miss out on the exciting highlights
        that make our platform a must-visit for every student.
      </p>
    </center>

    <div class="band">
      <div class="item-1">
        <a href="" class="card">
          <div class="thumb" style="background-image: url(h1.jpeg);">
          </div>
          <article>
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, aspernatur?</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque commodi quae iure temporibus, quo dolorum
              a
              laboriosam earum magni dolor, nam sapiente. Exercitationem eligendi distinctio quaerat quae omnis dolores
              laboriosam.</p>
            <span>By: Student</span>
          </article>
        </a>
      </div>
      <div class="item-2">
        <a href=""
          class="card">
          <div class="thumb" style="background-image: url(h2.jpeg);">
          </div>
          <article>
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque commodi quae iure temporibus, quo dolorum
              a
              laboriosam earum magni dolor, nam sapiente. Exercitationem eligendi distinctio quaerat quae omnis dolores
              laboriosam.</p>
            <span>By: Student </span>
          </article>
        </a>
      </div>
      <div class="item-3">
        <a href=""
          class="card">
          <div class="thumb" style="background-image: url(h3.jpeg);">
          </div>
          <article>
            <h1>Lorem ipsum dolor sit, amet </h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque commodi quae iure temporibus, quo dolorum
              a
              laboriosam earum magni dolor, nam sapiente. Exercitationem eligendi distinctio quaerat quae omnis dolores
              laboriosam.</p>
            <span>By: Student</span>
          </article>
        </a>
      </div>
      <div class="item-4">
        <a href=""
          class="card">
          <div class="thumb" style="background-image: url(h4.jpeg);">
          </div>
          <article>
            <h1>Eaque commodi quae iure temporibus, quo dolorum</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque commodi quae iure temporibus, quo dolorum
              a
              laboriosam earum magni dolor, nam sapiente.</p>
            <span>By: Student</span>
          </article>
        </a>
      </div>
      <div class="item-5">
        <a href="" class="card">
          <div class="thumb" style="background-image: url(h5.jpeg);">
          </div>
          <article>
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque commodi quae iure temporibus, quo dolorum
              a
              laboriosam earum magni dolor, nam sapiente. Exercitationem eligendi distinctio quaerat quae omnis dolores
              laboriosam.</p>
            <span>By: Student</span>
          </article>
        </a>
      </div>
      <div class="item-6">
        <a href=""
          class="card">
          <div class="thumb" style="background-image: url(h6.jpeg);"></div>
          <article>
            <h1>Lorem ipsum dolor, sit amet consectetur</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque commodi quae iure temporibus, quo dolorum
              a
              laboriosam earum magni dolor, nam sapiente. Exercitationem eligendi distinctio quaerat quae omnis dolores
              laboriosam.</p>
            <span>By: Student</span>
          </article>
        </a>
      </div>
      <div class="item-7">
        <a href=""
          class="card">
          <div class="thumb" style="background-image: url(h7.jpeg);"></div>
          <article>
            <h1>Notes From Behind the Farewall</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque commodi quae iure temporibus, quo dolorum
              a
              laboriosam earum magni dolor, nam sapiente. Exercitationem eligendi distinctio quaerat quae omnis dolores
              laboriosam.</p>
            <span>By: Student</span>
          </article>
        </a>
      </div>
    </div>
  </div>

  <!-- highlights end -->




  <!-- team deets -->

  <div class="teamdeets">
    <center>
      <h1>Our Team</h1>
      <p>
        Here, we take immense pride in introducing the passionate and dedicated individuals who form the backbone of our
        magazine.
      </p>
    </center>

    <div class="teamphotos">
      <div class="home-container">
        <div class="profile-card">
          <div class="img">
            <img src="girl3.jpg">
          </div>
          <div class="caption">
            <h3>Ramya</h3>
            <p style="color:black;">Backend Developer</p>
            <div class="social-links">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
        </div>
        <div class="profile-card">
          <div class="img">
            <img src="gitl4.jpg">
          </div>
          <div class="caption">
            <h3>Aasritha</h3>
            <p style="color:black;">Front End Developer</p>
            <div class="social-links">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!-- testimonials start -->
  <div class="testimonials">
  <center>
    <h1>Testimonials</h1>
    <p>
      At VMEG Magazine, we take immense pride in fostering a vibrant and inclusive community that celebrates the diverse
      voices and talents of our fellow students. But don't just take our word for it - let our readers and contributors
      speak for themselves!
    </p>
  </center>
  <section class="mycontainer">
    <div class="testimonial mySwiper">
      <div class="testi-content swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="stu1.jpg" alt="" class="image" />
          <p style="color:#E9E4F0;">
            "I've always been captivated by the insightful articles and thought-provoking pieces featured in VMEG
            Magazine. From academic tips to personal development stories, there's something for everyone, making it a
            go-to platform for students like me seeking inspiration."
          </p>

         

          <div class="details">
            <span class="name">Name</span>
            <span class="job">Student</span>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="stu2.jpg" alt="" class="image" />
          <p style="color:#E9E4F0;">
            "I attended one of VMEG's events last semester, and it was an unforgettable experience. The event brought
            students together, fostering new connections, and offering valuable insights into diverse fields. Kudos to
            the team for organizing such engaging gatherings!"
          </p>

          

          <div class="details">
            <span class="name">Name</span>
            <span class="job">Student</span>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="stu3.jpg" alt="" class="image" />
          <p style="color:#E9E4F0;">
            I'll forever cherish the memories I made during the magazine's annual event last year. It was an enthralling
            evening filled with laughter, talent showcases, and engaging workshops. Thank you, VMEG Magazine, for making
            college life even more memorable!"
          </p>

          

          <div class="details">
            <span class="name">Name</span>
            <span class="job">Student</span>
          </div>
        </div>
      </div>
      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <script src="swiper-bundle.min.js"></script>

  <script src="testimonial.js"></script>

  </div>
<!-- testimonials end -->


  






  <section class="socials">
    <div class="wrapper">
      <div class="button">
        <div class="icon">
          <i class="fab fa-facebook-f"></i>
        </div>
        <span>Facebook</span>
      </div>
      <div class="button">
        <div class="icon">
          <i class="fab fa-twitter"></i>
        </div>
        <span>Twitter</span>
      </div>
      <div class="button">
        <div class="icon">
          <i class="fab fa-instagram"></i>
        </div>
        <span>Instagram</span>
      </div>
      <div class="button">
        <div class="icon">
          <i class="fab fa-youtube"></i>
        </div>
        <span>YouTube</span>
      </div>
    </div>
  </section>
</body>
<footer>
  <div class="copyright">
    <p>&copy; 2023 VMEG Magazine. All rights reserved.</p>
  </div>
</footer>

</html>
<!-- Welcome to my project page	 -->