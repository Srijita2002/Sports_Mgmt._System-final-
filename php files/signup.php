<html>
<head>
    <title> Sign up </title>
	 <link rel="stylesheet" type="text/css" href="">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
     <style>
	 *{
	margin:0px;
	padding:0px;
}

.bgimage{
	background-image: url('z.jpg');
	background-size: 100% 110%;
	width: 100%;
	height: 100vh;
}
nav:after{
	content: '';
	display: block;
	clear: both;
}
.menu{

	width: 100%;
	height: 100px;
	background-color: rgba(0,0,0,0.5);
}

.leftmenu{
	width: 30%;
	line-height: 100px;
	float: left;
/*	background-color: yellow;*/
}

.leftmenu h4{
	padding-left: 70px;
	font-weight: bold;
	color: white;
	font-size: 22px;
	font-family: 'Montserrat', sans-serif;
}


.rightmenu{
	
	width:60%;
	height: 100px;
	float: right;
/*	background-color: red; */
}
.rightmenu ul{
	margin-left: 200px;
	list-style: none;
    display: flex;
}
.rightmenu li {
	display: inline-block;
	list-style: none;
	position: relative;

}
.rightmenu ul li a{
	font-family: 'Montserrat', sans-serif;
	display: inline-block;
	list-style: none;
	font-size: 15px;
	color:white;
	font-weight: bold;
	line-height: 100px;
	margin-left: 80px;
	text-transform: uppercase;

}

.rightmenu ul li ul{
 display:none;
}

#fisrtlist{
	color: orange;
}

.rightmenu ul li a:hover{
	color: orange;
}
.rightmenu li:hover .dropdown{
	display: block;
}
.dropdown {
	background-color: rgba(0,0,0,0.8);
	position: absolute;
	display: none;
	top: 99px;
	left: -150px;
	right: 10px;
	width: 250px;
}
.dropdown li{
	border: 2px solid #222;
	display: block;
	color: #fff;
}
h2 {
	text-align: center;
	margin-bottom: 20px;
}

.login-box{
    width: 450px;
    height: 520px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 60%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 2px;
}
.login-box input
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 10px;
    color: #fff;
    font-size: 12px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: yellow;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
input {
	display: block;
	border: 25px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: yellow;
	font-size: 20px;
	padding: 10px;
}

button {
	float: right;
	background: orange;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .5;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
} 
</style>
	
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
					<li ><a href="index.html"> HOME</a> </li>
					<li><a href="events.html"> Events</a> </li>
					<li> <a href=""> Log in</a> 
					     <ul  class="dropdown">
                                <li><a href="admin.php">Admin login</a></li>
                                <li><a href="log.php">User login</a></li>
				         </ul>
				    </li>
					
					<li><a href="index4.php">Feedback</a></li>
				</ul>
			</div>
         </nav>
		</div>
		<section>
         <div class="login-box">
     <form action="signup-check.php" method="post">
     	<h2>Don't have an account?<br><br>SIGN UP NOW</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
             <div class="control">
          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>
</div>
          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Retype Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="log.php" class="ca">Already have an account?</a>
     </form>
	 </div>
	 
    </section>
	
</body>
</html>