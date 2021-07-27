<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta charset="utf-8">
  <title>About Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa&display=swap" rel="stylesheet"></link>
  <style media="screen">
    .arabic
    {
        font-family: 'Aref Ruqaa';
        direction: rtl;
    }

    img {
      width: 150px;
      border-radius: 100%;
      margin-bottom: 20px;

      /*Center Aligning*/
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .mainContainer {
      text-align: center;
      padding: 80px;

    }

    .person1,
    .person2 {
      background-color: rgb(24, 25, 26);
      width: 45%;
      height: 400px;
      align-content: center;
      align-items: center;
      padding: 35px;
      overflow: hidden;
      border-radius: 20px;
      color: #fef8f7;
    }

    .person1 {
      float: left;
    }

    .person1 {
      float: right;
    }

    #unn {
      background-color: #fef8f7;
      color: rgb(24, 25, 26);
      border-radius: 5px;
    }

    .center {
      width: 50%;
      padding: 10px;
      margin-left: 30%;
      margin-right: 30%;
    }


    img
    {
        -webkit-filter: blur(2.5px);
        filter: blur(2.5px);
    }

    img:hover
    {
        -webkit-filter: blur(0px);
        filter: blur(0px);
    }

  </style>
</head>

<body>
  <header id="header">
    <!-- Start Header HTML ///////////////*/-->
    <div id="Hdiv1" style="cursor:pointer;">
      <p onclick="window.location='mainPage.php'">Quizzzo</p>
    </div>
    <div id="Hdiv2">
      <table>
          <tr>
              <th><a href="mainPage.php">Home</a></th>
              <th><a href="#con">Contact us</a></th>
              <th><a href="AboutUsPage.php"  id="unn">About us</a></th>
              <th><a href="LoginForm.php">Login | Sign up</a></th>
          </tr>
      </table>
    </div>
  </header>
  <!--End Header HTML ///////////////*/-->

  <div class="mainContainer">
    <div class="person1">
      <img src="Pictures\samer.jpg" alt="Samer" id="img1">
      <p>
        Samer Al-Zoubi   |
        <span class="arabic">
            سامر الزعبي
        </span>
        <br />
        <span class="arabic">"مهما بدت الحياة صعبة، يوجد دائماً شيءٌ يمكنك النجاح فيه"</span><br />
        "However difficult life may seem, there is always something you can do and succeed at" <br>

       </p>
      <div class="center">
        <ul class="sci">
          <li> <a href="https://www.facebook.com/profile.php?id=100009618192492" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li> <a href="https://twitter.com/SAlzube" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li> <a href="https://www.instagram.com/samer_a5033/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li> <a href="mailto:samer.s5033@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="person2">
        <img src="Pictures\issam2.jpg" alt="Issam" id="img2">
            <p>
                Issam Abdoh   |
                <span class="arabic">
                عصام عبده
                </span>
                <br />
                Eager to expand my skill set through external trainings to help boost the current condition of our nation .<br />
                <span class="arabic">، أَطْمَحُ بِنَهْضَةِ الأُمَّةِ ،</span>
                <br />
                , I aspire for the rise of the nation ,
            </p>
        <div class="center">
            <ul class="sci">
                <li> <a href="https://www.facebook.com/EssamZly/" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li> <a href="https://twitter.com/Essam_Abdo99" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li> <a href="https://www.instagram.com/ia_ea/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li> <a href="mailto:Issam.imran.abdoh@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
  </div>

  <!--Start Footer HTML ///////////////*/-->

  <footer id="con">
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
            <li> <a href="AboutUsPage.php"> About us </a> </li>
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

  <!--End Footer HTML ///////////////*/-->
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
