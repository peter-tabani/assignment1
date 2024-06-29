<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];

  $languages = $_POST["languages"];
  $language = "";
  foreach($languages as $row){
    $language .= $row . ",";
  }

  $query = "INSERT INTO tb_data VALUES('', '$name', '$age', '$country', '$gender', '$language')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar View</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <section class="header">
  <?php include('navbar.php'); ?>
<div class="nav-line"></div>
    <div class="text-box">
        <h1>Scheduling made easy </h1>
        <p>Calendar View is your scheduling automation platform for eliminating the back-and-forth<br> emails to find the perfect time — and so much more.
        </p>
        <a href="" class="hero-btn">Learn more</a>
    </div>
  </section>

  <section id="login-container">
        <section id="signup">
            <h2>Sign Up</h2>
            <form action="/formhandler.inc.php" method="post">
                <label for="signup-username">Username:</label>
                <input type="text" id="signup-username" name="username" required>
               
                <label for="signup-email">Email:</label>
                <input type="email" id="signup-email" name="email" required>
               
                <label for="signup-password">Password:</label>
                <input type="password" id="signup-password" name="pwd" required>
               
                <input type="submit" value="Create Account">
            </form>
        </section>
       
        <!-- Clickable link for Sign Up / Log In -->
        <a href="javascript:void(0);" onclick="toggleSection()" id="toggleLink" class="center-link">Click here to log in</a>
       
        <!-- Login Section -->
        <section id="login" style="display:none;">
            <h2>Login</h2>
            <form action="/formhandler.inc.php" method="post">
                <label for="login-username">Username:</label>
                <input type="text" id="login-username" name="username" required>
               
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="pwd" required>
               
                <input type="submit" value="Log In">
            </form>
        </section>
    </section>
    <script>
      var isSignUpVisible = true;
     
      function toggleSection() {
        var signupSection = document.getElementById('signup');
        var loginSection = document.getElementById('login');
        var toggleLink = document.getElementById('toggleLink');
       
        if (isSignUpVisible) {
          signupSection.style.display = 'none';
          loginSection.style.display = 'block';
          toggleLink.textContent = "Click here to sign up";
          isSignUpVisible = false;
        } else {
          signupSection.style.display = 'block';
          loginSection.style.display = 'none';
          toggleLink.textContent = "Click here to log in";
          isSignUpVisible = true;
        }
      }
  </script>

  

  
  <section class="features">
    <h1>Special Calendar View Features.</h1>
    <!--<p>Lorem ipsum dolor sit amet, conscetuor adispicing elit</p>-->
    <div class="row">
        <div class="course-col">
            <h3>Task Management</h3>
            <p>With Calendar View, you can effortlessly create, organize, and prioritize tasks in one centralized location.</p>
        </div>
        <div class="course-col">
            <h3>Feedback</h3>
            <p>Your feedback is invaluable to us. That's why Calendar View includes a built-in feedback feature and rating system. Share your thoughts, suggestions, and ideas directly with our team to help us improve the platform and tailor it to your needs.</p>
        </div>
        <div class="course-col">
            <h3>Notifications</h3>
            <p>Never miss a deadline or appointment again with Calendar View's customizable notifications and reminders. Receive timely alerts for upcoming tasks, events, and important milestones, keeping you informed and on track.</p>
        </div>
    </div>
</section>
 <!-- Introduction Section -->
 <section class="introduction">
  <h1>The Importance of Scheduling and Planning</h1>
  <p>In our fast-paced world, scheduling and planning have become essential skills for success. Here are three key reasons why:</p>
</section>

<!-- Paragraphs Section -->
<section class="paragraphs">
  <div class="row">
      <div class="paragraph-col">
          <h3>Efficient Time Management</h3>
          <p>By creating schedules and plans, individuals can effectively manage their time. This allows them to prioritize tasks, allocate sufficient time for important activities, and avoid procrastination. Efficient time management leads to increased productivity and reduced stress levels.</p>
      </div>

      <div class="paragraph-col">
          <h3>Goal Achievement</h3>
          <p>Scheduling and planning provide a roadmap for achieving goals. When individuals set clear objectives and outline the necessary steps to reach them, they are more likely to stay focused and motivated. Regularly reviewing and adjusting schedules ensures progress towards desired outcomes.</p>
      </div>

      <div class="paragraph-col">
          <h3>Improved Organization</h3>
          <p>Organized individuals tend to be more successful in both their personal and professional lives. Scheduling and planning help individuals stay organized by keeping track of appointments, deadlines, and commitments. This leads to reduced chaos, increased efficiency, and better decision-making.</p>
      </div>
  </div>
</section>
<section class="features2">
  <h1>Drive More Revenue</h1>
  <p>Elevate your revenue streams by effortlessly booking high-value meetings in mere seconds, transforming the scheduling process into a strategic advantage.</p>

  <div class="row">
      <div class="course-col2">
          <img src="images/setup.png">
          <div class="blog-right">
              <h3>Accelerate Your Sales Cycle</h3>
              <p>Maintain unwavering momentum in your sales journey by eliminating scheduling hurdles at every turn. With streamlined processes, you can keep your focus on nurturing relationships and closing deals.</p>
          </div>
      </div>
      <div>
          <h3>Seal the Deal with Confidence</h3>
          <p>Maximize your success rate with personalized reminder and follow-up strategies designed to propel your deals forward. By integrating seamlessly with your sales tools and freeing up time from logistical tasks, you can concentrate on what truly matters: sealing the deal.</p>
      </div>
      <div>
          <h3>Discover More Opportunities</h3>
          <p>Uncover a wealth of additional features and functionalities aimed at optimizing your revenue-generating endeavors. Explore new avenues and strategies to drive your business growth to unprecedented heights.</p>
      </div>
  </div>
</section>

  <section class="testimonials">
    <h1>Our Users</h1>
    <p>Explore Valuable Insights Shared by Our Esteemed Community of Users.</p>

    <div class="row">
        <div class="testimonials-col">
            <img src="images/user1.jpg">
            <div> <!-- Added forward slash to close div -->
                <p>Using this calendar platform has transformed my scheduling process.
                No more endless email threads or missed appointments!
                The intuitive interface and seamless integration with my existing tools make managing my time a breeze.
                Highly recommended.
                </p>
                <h3>Joy Njeru</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div> <!-- Added forward slash to close div -->
        </div>

        <div class="testimonials-col">
            <img src="images/user2.jpg">
            <div> <!-- Added forward slash to close div -->
                <p>As a busy professional, I rely on this scheduling website to keep my life in order.
                The customizable event templates, real-time availability checks, and automatic calendar sync have simplified my work and personal commitments.
                Plus, the responsive support team ensures a smooth experience. Thumbs up!
                </p>
                <h3>Emmanuel Douglas</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div> <!-- Added forward slash to close div -->
        </div>
    </div>
</section>
  <section class="footer">
    <h4>About us</h4>
    <p>
        At our calendar and scheduling platform, we're passionate about simplifying your life.
        Our mission is to empower individuals, businesses, and teams to manage their time efficiently.
        Whether you're coordinating meetings, planning events, or organizing your personal schedule, we've got you covered.
    </p>
    <div class="icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin"></i>
    </div>
    <p>Founded by Jesse <i class="fa fa-heart-o"></i> Created by Frank</p>
    <div class="container">
        <p>&copy; 2024 Jesse. All rights reserved.</p>
    </div>
</section>

  <!-- JavaScript to toggle menu -->
  <script>
    function showMenu() {
      var navLinks = document.getElementById("navLinks");
      navLinks.style.right = "0";
    }

    function hideMenu() {
      var navLinks = document.getElementById("navLinks");
      navLinks.style.right = "-200px";

    }
  </script>
</body>
</html>