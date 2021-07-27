<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <style media="screen">

    #Sdiv1 {
      background-color: rgb(24, 25, 26);
      color: #fef8f7;
      text-align: center;
      margin-top: 50px;
      width: 80%;
      padding: 20px;
      border-radius: 15px;
      font-size: 40px;
      position: absolute;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    #LoginForm {
      background-color: rgb(24, 25, 26);
      margin-top: 100px;
      color: #fef8f7;
      border-radius: 15px;
      overflow: hidden;
      padding: 20px;
      width: auto;
      float: left;
      margin-left: 20%;
    }

    #SignupForm {
      background-color: rgb(24, 25, 26);
      margin-top: 100px;
      color: #fef8f7;
      border-radius: 15px;
      overflow: hidden;
      padding: 20px;
      width: auto;
      float: left;
      margin-right: 20%;
      margin-left: 20px;
    }

    .HLink {
      padding-right: 5px;
      padding: 10px;
      border-radius: 7px;
    }

    .section {
      width: 100%;
      margin-bottom: 5px;
    }

    input {
      border-radius: 5px;
      border: none;
      padding: 5px;
    }

    .T {
      font-size: 35px;
      padding: 10px;
    }

    .button {
      background-color: #fef8f7;
      color: rgb(24, 25, 26);
      font: 17px solid;
      padding: 8px;
      width: 100px;
      margin-top: 30px;
      margin-left: 30px;
    }

    .button:hover {
      font-size: 20px;
    }

    .FTh {
      padding: 15px;
      font-size: 20px;
    }

    button:hover {
      cursor: pointer;
    }

    #unn{
      background-color: #fef8f7;
      color: rgb(24, 25, 26);
      border-radius: 5px;
    }

  </style>
</head>

<body>
  <header id="header">
    <!--Start Header HTML ///////////////*/-->
    <div id="Hdiv1" style="cursor:pointer;">
      <p onclick="window.location='mainPage.php'">Quizzzo</p>
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

  <div class="section">
    <div id="Sdiv1">
      Login or Register
    </div>

    <div id="LoginForm">
      <form class="" action="LoginForm.php" method="post">
        <table>
          <tr>
            <th colspan="2" class="T">Login</th>
          </tr>
          <tr>
            <th class="FTh"><label for="emailLog">Email :</label></th>
            <th class="FTh"><input type="email" name="emailLog" placeholder="Your Email" ></th>
          </tr>
          <tr>
            <th class="FTh"><label for="passwordLog">Password :</label></th>
            <th class="FTh"><input type="password" name="passwordLog" placeholder="Your Password" ></th>
          </tr>
          <tr>
            <th><input type="submit" value="Login" class="button" name="loginbtn"></th>
            <th><input type="reset" value="Reset" class="button"></th>
          </tr>
        </table>
      </form>
    </div>

    <div id="SignupForm">
      <form class="" action="LoginForm.php" method="post">
        <table>
          <tr>
            <th colspan="2" class="T">Register</th>
          </tr>
          <tr>
            <th class="FTh"><label for="FName">First Name</label></th>
            <th class="FTh"><input type="text" name="FName" placeholder="like --> Name" pattern="[A-Z][a-z]{1,}" id="FName" required></th>
          </tr>
          <tr>
            <th class="FTh"><label for="LName">Last Name</label></th>
            <th class="FTh"><input type="text" name="LName" placeholder="like --> Name" pattern="[A-Z][a-z]{1,}" id="LName" required></th>
          </tr>
          <tr>
            <th class="FTh"><label for="email">Email</label></th>
            <th class="FTh"><input type="email" name="email" placeholder="Your Email"  required></th>
          </tr>
          <tr>
            <th class="FTh"><label for="password">Password</label></th>
            <th class="FTh"><input type="password" name="password" placeholder="Your Password"  required></th>
          </tr>
          <tr>
            <th><input type="submit" value="Sign up" name="signup" class="button"></th>
            <th><input type="reset" value="Reset" class="button"></th>
          </tr>

        </table>
      </form>

    </div>
  </div>

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
      if(isset($_POST['signup']))
      {
          // Create connection
          $con = mysqli_connect("localhost","root","","users");

          // Check connection
          if ($con->connect_error)
          {
              die("Connection failed: " . $con->connect_error);
              exit();
          }
          else
          {
              echo "Connection worked<br />";
          }

          if(isset($_POST['signup']))
          {
              $name = $_POST["FName"] ." ". $_POST["LName"];
              $email = $_POST['email'];
              $password = $_POST['password'];

              $query = "insert into user(name, email, password) value ('$name', '$email', '$password')";

              if(mysqli_query($con,$query))
              {
                  echo '<script type="text/javascript">
                      alert("REGISTED SUCCESSFULLY");
                      </script>';
              }
              else
              {
                  echo "Record not added " . mysqli_error($con);
              }
              // close db connection
              mysqli_close($con);
          }
      }
  ?>

  <?php
      if(isset($_POST['loginbtn']))
      {
          // Create connection
          $con = mysqli_connect("localhost","root","","users");

          // Check connection
          if ($con->connect_error)
          {
              die("Connection failed: " . $con->connect_error);
              exit();
          }
          else
          {
              echo "Connection worked<br />";
          }
          $email = $_POST['emailLog'];
          $password = $_POST['passwordLog'];

          $sql = "SELECT name FROM user WHERE email='$email' AND password='$password'";
          $result = $con->query($sql);
          if ($result -> num_rows > 0)
          {
              while ($row = $result->fetch_assoc())
              {
                  $_SESSION['username'] = $row['name'];
                  echo '<script type="text/javascript">
                  alert("You have logged in successfully !");
                  window.location = " mainPage.php ";
                  </script>';
                  // echo "<br>Admin name is : " . $row['name'] ;
              }
          }
          else
          {
              echo '<script type="text/javascript">
                        alert("Username is not available bro ");
                    </script>';
          }
          mysqli_close($con);
      }
  ?>

  <?php
      if (!isset($_SESSION['username']))
      {
      	echo '<script type="text/javascript">/*alert("please log in or register if you do not have an account .");*/</script>';
      }
      else
      {
          echo '<script type="text/javascript">
          var t = document.getElementsByTagName("tr");
          t[0].innerHTML+= " <th style=\"color: #ffffff; border-radius: 5px; padding: 3px;\"> ' . $_SESSION['username'] .'</th>";
          t[0].innerHTML+= " <th> <a href=\"logout.php\"> <i style=\"margin-left: 15px;\" class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> </a> </th>";
          </script>';
      }
  ?>
</body>

</html>
