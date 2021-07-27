<?php
    session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Make Quiz Website</title>
		<link rel="stylesheet" href="quiz.css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="..\..\style1.css">
		<!--<link rel="stylesheet" href="style1.css">-->
		<style media="screen">
			body
			{
			    background-color: #d4cfce;
			}
		</style>
	</head>
	<body>
		<header id="header">
        <!--Start Header HTML ///////////////*/-->
        <div id="Hdiv1" style="cursor:pointer;">
          <p onclick="window.location='../../mainPage.php'">Quizzzo</p>
        </div>
        <div id="Hdiv2">
			<table>
				<tr>
					<th><a href="../../mainPage.php" id="unn">Home</a></th>
					<th><a href="#con">Contact us</a></th>
					<th><a href="../../AboutUsPage.php">About us</a></th>
					<th><a href="../../LoginForm.php">Login | Sign up</a></th>
				</tr>
			</table>
		</div>
    </header>
    <!--End Header HTML ///////////////*/-->
	<div class="quizContainer">

		<div id="container">
            <h1>HTML Quiz</h1>
   			<br/>
  			<div id="quiz"></div>
    		<div class="button" id="next"><a href="#">Next</a></div>
    		<div class="button" id="prev"><a href="#">Prev</a></div>
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
                    <li> <a href="../../mainPage.php"> Home </a> </li>
                    <li> <a href="../../AboutUsPage.php"> About us</a> </li>
                    <li> <a href="../../LoginForm.php"> Login </a> </li>
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
                echo '<script type="text/javascript">
                alert("Please log in first .");
                window.location = "../../LoginForm.php";
                </script>';
            }
            else
            {
                echo '<script type="text/javascript">
                var t = document.getElementsByTagName("tr");
                t[0].innerHTML+= " <th style=\"color: #ffffff; border-radius: 5px; padding: 3px;\"> ' . $_SESSION['username'] .'</th>";
                t[0].innerHTML+= " <th> <a href=\"../../logout.php\"> <i style=\"margin-left: 15px;\" class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> </a> </th>";
                </script>';
            }
		?>
        <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <script src="quiz.js"></script>
	</body>
</html>
