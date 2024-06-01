<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> SPORTS</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
	<style>
        .bgimage {
            background-image: url('v.gif');
            background-size: 100% 150%;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			<nav>
			<div class="leftmenu">
				<h4> ADMIN PANNEL </h4>
			</div>

			<div class="rightmenu">
			<ul>
					<li id="fisrtlist"><a href="admin_index.php."> HOME </a></li>
					<li id="fisrtlist"><a href="events.html"> EVENTS </a></li>
					<li> <a href="">PREDICTION</a>
					             <ul  class="dropdown">
                                <li><a href="https://shreyagituser-90.github.io/Cricket-Par-Score-Prediction-HomePage/">Par Score</a></li>
                                <li><a href="https://cricketscoreprediction-t9apptc8xs7dvlk3kgmtte.streamlit.app/">IPL Score</a></li>
						         </ul></li>
					<li><a href="logout.php">Log out</a></li>
			</ul>
			</div>
         </nav>
		</div>

		<div class="text">
			<br><br><br>
			<h1> WELCOME <?php echo $_SESSION['name']; ?> </h1>
			
			
		</div>
<div class="log-sign" style="--i: 1.8s">
                    <a href="feedback_check.php" class="btn transparent">Feedback</a>
                </div>
	</div>
<footer class="footer">
      <div class="footer-container">
        <div class="footer-row">
          <div class="footer-col">
            <h4>About Us</h4>
            <ul>
              <li><a href="#">Our Team</a></li>
              
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Contact Us</h4>
            <ul>
              <li><a href="#">Email: contact@sportsmanagement.com</a></li>
              <li><a href="#">Phone: +123 456 7890</a></li>
              <li><a href="#">Address: 123 Sports Ave, City</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 Sports Management System. All rights reserved.</p>
      </div>
    </footer>

    <!-- Font Awesome for social media icons -->
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
</body>
</html>
<?php 
}else{
     header("Location: admin.php");
     exit();
}
 ?>
