<?php
$con=new mysqli('localhost','root','','karuna_clinic_center');

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	
	<title> Online Channelling </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
		* {
			box-sizing: border-box;
		}
		.header::after {
			content: "";
			clear: both;
			display: table;
		}
		
		.bottom type::after {
			content: "";
			clear: both;
			display: table;
		}
		
		[class*="col-"] {
			float: left;
			padding: 15px;
		}
		
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
	
		.title{
			
						height:200px;
			background-image:url("Aurora-Soft-Blue-abstract-wallpapers-illusions-polish-shape-abstract-aurora-1920x1080.jpg");
			height:200px;
			border-radius: 25px 25px 0px 0px;
			font-family:Brush Script MT;
			font-size:60px;
			color: white;
			padding:5px;
			line-height:0.5px;
		}
		
		.header{
			background-color:  #d5dbdb;
			text-decoration: none;
			font-family:Algerian;
			color:#0b8276;
			font-size:25px;
			text-align:center;
		}
					legend {
				color: #002080;
				font-size: 18px;
				font-weight:bold;
			}
			.field input,textarea,select {
		
				margin-left: 150px;
			}
		
		#footer div {
				background-color: #66d9ff;
				width: 40%;
				border-radius: 5px;
			}
			.button {
    background-color: #86c3e0;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.contact{
			background-color:   #d5dbdb ;
			padding:0.1%;
			border-radius: 15px;
			margin-bottom:10px;
			font-size:20px;
			line-height:45px;
		}
		input[type=submit] {
    background-color: #4CAF50;
    color: white;
}
.field input,textarea,select {
				padding: 120px;
				margin-left: 150px;
			}

/* Style all input fields */
input[type=text],input[type=tel],input[type=email],input[type=submit],input[type=textarea] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
a:visited{
		color:blue;
		}
		a:active{
		color:white;
		}
		a:link{
		text-decoration:none;
		}
	</style>

</head>
<body>

<div class="title col-12">
		<h1>Karuna Clinic Center</h1>
		<h2 style="font-family:Agency FB;font-size:30px;">You Can Trust Us</h2>
	</div>
	
	<div class="header col-12">
	
		<div  class="Home col-4">
			<a href="Home.php">Home</a>
		</div>
		
		
		
		<div class="Customer col-4">
			<a href="Services.php">Services </a>
		</div>
		
		<div class="Contact col-4">
			<a href="Contact.php">Contact Us</a>
		</div>
		</div>
		
	<div class="footer col-12">
	<div  class="form col-5">
		<ul>
			<li><h2>Visit Our Clinic at </h2></br></li>
				<address>
				No-212/5,</br> Chankanai North,</br> Jaffna.</br>
				</address>
			<li><h2>Contact Number</h2></br></li>
				<p>+944658352464</p>
				<p>+946789765432</p>
			<li><h2>E-mail</h2></br></li>
				<p>karunacliniccenter@gmail.com</p>
			<li><h2>Fax</h2></br></li>
				<p>+944658352464</p>
<br></br>	
<br>		

</div>

<div class="img col-7">
	<form action="Contact.php" method="post">
	<label for="name">Name</label>
	
    <input type="text" id="name" name="name" required>
	
	<label for="phone">Contact No</label>
	
    <input type="tel" id="phone" name="phone" placeholder="**********" pattern="^\d{10}$"  required>
	
	 <label for="email">Email</label>
	
    <input type="email" id="email" name="email" required>
	
	

	 <label for="address">Question/Comment</label>
	
    <input type="textarea" id="comment" name="comment" required>
    <input type="submit" name="submit" value="Send">
</div>
	</div>
	<div class="contact col-12">
		<div class="img col-3">
		<img src="images\logo-right.png" width="70%" height="150px">
		</div>
		<div class="address col-3">
		<p style="align:center"><address >No-212/5,</br> Chankannai North,</br> Jaffna,</br> Sri Lanka.</address></p><br/>
		</div>
		<div class="phone col-3">
		<p> &#9742 +944658352464</p>
		<p> &#9742 +946789765432</p>
		</div>
		<div class="time col-3">
		<p style="font-family:Agency FB";>Week days</p>
		<p style="font-family:Agency FB";>7.30am to 8.30am</p>
		<p style="font-family:Agency FB";>Weekend</p>
		<p style="font-family:Agency FB";>7.30am to 10.30am</p>
		</div>
	</div>
</body>
</html>