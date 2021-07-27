<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Log out</title>
        <script type="text/javascript">
        </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <header id="header">
          <!--Start Header HTML ///////////////*/-->
          <div id="Hdiv1">
            Quizzzo
          </div>
          <div id="Hdiv2">
            <table>
                <tr>
                    <th><a href="mainPage.php">Home</a></th>
                    <th><a href="#con">Contact us</a></th>
                    <th><a href="AboutUsPage.php">About us</a></th>
                    <th><a href="LoginForm.php"  id="unn">Login | Sign up</a></th>
                </tr>
            </table>
            </div>
        </header>
        <!--End Header HTML ///////////////*/-->


        <footer>
          <div class="container">
            <div class="sec AboutUs">
              <h2>Social Media</h2>
              <p>We're working hard Sunday through Thursday , starting bright and early with a cup of lightly creamed coffee . We prefer email , but feel free to give us a ring for good measure .</p>
              <ul class="sci">
                <li> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li> <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li> <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li> <a href="#"> <i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
              </ul>
            </div>

            <div class="sec quickLinks">
              <h2>Quick Links</h2>
              <ul>
                  <li> <a href="mainPage.php"> Home </a> </li>
                  <li> <a href="AboutUsPage.php"> About us</a> </li>
                  <li> <a href="LoginForm.php"> Login </a> </li>
              </ul>
            </div>

            <div class="sec contact">
              <h2>Contact us</h2>
              <ul class="info">
                <li>
                  <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                  <span>123 Prince Mohammad street<br />Amman<br />JORDAN</span>
                </li>
                <li>
                  <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                  <p>
                    <a href="tel:12345678900">+1 234 567 8900</a><br />
                    <a href="tel:12345678900">+1 234 567 8900</a>
                  </p>
                </li>
                <li>
                  <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                  <p> <a href="mailto:abc@gmail.com">abc@gmail.com</a> </p>
                </li>
              </ul>
            </div>
          </div>
        </footer>
        <div class="copyrightText">
          <p>Copyright &copy; 2021 Samer & Issam . All Rights are Reserved .</p>
        </div>

        <?php
            if(isset($_SESSION['username']))
            {
                unset($_SESSION['username']);
            }
            echo
            '<script type="text/javascript">
                alert("You have logged out successfully !");
                window.location = "mainPage.php";
            </script>';
        ?>
    </body>
</html>
