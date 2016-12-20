<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Racquel Tomaz Soares - Contact Page - Assignment 2 -->
	<meta charset="UTF-8" />
	<title>Forms</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="racquel-tomaz-logo.png" alt="Logo of Racquel Tomaz" style="width: 120px">
		</div>
		<nav>
			<ul>
				<li><a href="http://www.linkedin.com/in/racqueltomaz" target="_blank">LinkedIn</a></li>
				<li><a href="http://www.twitter.com/racqueltomaz" target="_blank">Twitter</a></li>
				<li><a href="http://www.racqueltomaz.com" target="_blank">Portfolio</a></li>
				<li><a href="form.php">Contact Form</a></li>
			</ul>
		</nav>
	</header>
	<div class="box">
		<form method='POST'>  
			<h2>To contact me, please fill out the form:</h2>
			<div class="contact"> 
			<p class="form">First Name:</p>
			<input class="field" type="text" name="first_name" placeholder="Enter your first name"><br>
			<p class="form">Last Name:</p>
			<input class="field" type="text" name="last_name" placeholder="Enter your last name"><br>
			<p class="form">Phone Number:</p>
			<input class="field" type="text" name="phone_number" placeholder="Enter your phone number"><br>
			<p class="form">Subject:</p>
			<select class="field" name="subject">
 				<option value="job opportunity" selected>Job opportunity</option>
 				<option value="networking">Networking</option>
 				<option value="personal matters">Personal matters</option>
 				<option value="suggestions">Suggestions</option>
			</select><br>
			<p class="form">Message:</p>
			<textarea class="message" name="message" placeholder="Enter your message">
			</textarea><br>
			<p class="form">Password:</p>
			<input class="field" type="password" name="password" placeholder="Choose password"> <br><br>
			<input class="submit" type="submit" value="Send Message"> <!--great work for some reason the full send message text didn;t show
			on my button, simple submit maybe better--> 
			</div>
		</form> 
		<h3>
		<?php   
			if (!empty($_POST['first_name'])) {
   			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$phone_number = $_POST['phone_number'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$password = $_POST['password'];
   			echo "", $first_name, " ", $last_name, ",  thank you for your message. I will call you soon at ", $phone_number, " about ", $subject, ".";
   		}
	
		?>
		</h3>
	</div>
</body>
</html>
