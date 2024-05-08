<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Sports</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			<nav>
			<div class="leftmenu">
				<h4> Sports Management System </h4>
			</div>

			<div class="rightmenu">
			<ul>
					<li id="fisrtlist"><a href="home.php"> HOME </a></li>
					<li><a href="">Events</a></li>
					<li> <a href="">Prediction</a>
					 <ul  class="dropdown">
                                <li><a href="">Par Score</a></li>
                                <li><a href="https://cricketscoreprediction-t9apptc8xs7dvlk3kgmtte.streamlit.app/">IPL Score</a></li>
						         </ul></li>
					
					<li><a href="logout.php">Log out</a></li>
			</ul>
			</div>
         </nav>
		</div>

		<div class="text">
			<br>
			<h1> WELCOME <?php echo $_SESSION['name']; ?> </h1>
			
			
		</div>
		<div class="log-sign" style="--i: 1.8s">
                    <a href="index4.php" class="btn transparent">FEEDBACK</a>
                </div>

	</div>

</body>
</html>
<?php 
}else{
     header("Location: log.php");
     exit();
}
 ?>