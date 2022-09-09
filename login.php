<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-1">
        <!--Here is our main header that is used across the pages of our website-->
        <header class="header">
            <h1 class="title">RexJ' Global Ventures</h1>
            <nav class="menu">
                <div class="btn">
                    <i class="fas fa-times close-btn"></i>
                </div>
                <ul class="page-nav">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="ourteam.html">Our Team</a></li>
                    <li><a href="project.html">Projects</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
            <div class="btn">
                <i class="fas fa-bars menu-btn"></i>
            </div>
        </header>
    </div>

      <div class="container">
          <div class="card">
              <div class="inner-box" id="card">
                  <div class="card-front">
                      <h2>Login</h2>

                      <form action="server.php" method="post">
                        
                        

                          <input type="email" name="email" class="input-box" placeholder="Enter Your Email Id" required>
                          <input type="password" name="password" class="input-box" placeholder="Enter Your Password" required>
                          <button type="submit" class="submit-btn">Submit</button>
                          <input type="checkbox"><span>Remember Me</span>
                      </form>

                      <button type="button" class="btn" name="login_user" onclick="openRegister()">I'm New Here</button>

                      <a href="#">Forgot Password</a>
                  </div>

                  <div class="card-back">
                    <h2>Register</h2>

                    <form action="server.php" method="post">

                        <input type="text" name="firstname" class="input-box" placeholder="Enter Your Firstname" required>
                        <input type="text" name="lastname" class="input-box" placeholder="Enter Your Lastname" required>
                        <input type="text" name="username" class="input-box" placeholder="Enter Your Username" required>
                        <input type="email" name="email" class="input-box" placeholder="Enter Your Email Id" required>
                        <input type="number" name="phone" class="input-box" placeholder="Enter Your Phone Number" required>
                        <p>Select your Gender:</p>
                        <div class="gender">
                            <input type="radio" name="sex" value="male"/><span>Male</span>
                            <input type="radio" name="sex" value="female"/><span>Female</span>
                            <input type="radio" name="sex" value="others"/><span>Prefer not to say</span>
                        </div>
                        <!--<p class="dob">Date of Birth:<input type="date" name="dob"/></p>-->
                        <input type="password" name="password_1" class="input-box" placeholder="Enter Your Password" required>
                        <input type="password" name="password_2" class="input-box" placeholder="Confirm Your Password" required>
                        <button type="submit" class="submit-btn" name="reg_user">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>

                    <button type="button" class="btn" onclick="openLogin()">I have an Account</button>

                    <a href="#">Forgot Password</a>
                  </div>
              </div>
          </div>
      </div>
    

    <!-- Here is the main footer that is used across all the pages of our website-->
    <footer class="footer-color reveal">
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa velit accusantium ad ipsa, mollitia rem consectetur unde beatae, quae maxime nemo nostrum possimus obcaecati error vel voluptates perspiciatis deserunt.</p>
        <hr>
           
        <div class="footer-color footer-row">
            <div class="footer-col-1">
                <h2>Quick links</h2>
                <div class="dance">
                    <a href="home.html">Home</a><br>
                    <a href="ourteam.html">Our Team</a><br>
                    <a href="project.html">Projects</a><br>
                    <a href="contact.html">Contact Us</a><br>
                    <a href="blog.html">Blog</a><br>
                    <a href="login.php">Login</a><br>
                </div>
            </div>

            <div class="footer-col-1">
                <h2>Extra links</h2>
                <div class="dance">
                    <a href="#">Advertise with us</a><br>
                    <a href="#">Terms and conditions</a><br>
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Cookies Policy</a><br>
                    <a href="#">Accessibility Statement</a><br>
                    <a href="#">Archives</a><br>
                </div>
            </div>

            <div class="footer-col-1">
                <h2>Contact Us</h2>
                <div class="dance">
                    <h3>Advertisement</h3>
                    +23456537688464 <br><br>

                    <h3>Bookings</h3>
                    +2345678364565
                </div>
            </div>

            <div class="footer-col-1">
                <h2>Follow Us</h2>
                <div class="footer-media-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
                
            </div>

        </div>
        <hr>
            <p class="Copyright">&copy Copyright 2022 by RexJ Global Ventures. All rights reserved.</p>
    </div>
    </footer>

    <script src="login.js"></script>

</body>
</html>