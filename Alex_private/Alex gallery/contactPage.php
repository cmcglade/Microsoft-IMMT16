<html>
<head>
	<link rel="stylesheet" type="text/css" href="contactPage.css">
</head>
<body>
	<div id="phpSubmit">
		<p id="phpContent">Thank you <?php echo ucfirst($_POST["fName"]); ?> <?php echo ucfirst($_POST["lName"]); ?> for submitting your information.<br>
		We will contact you soon at <?php echo $_POST["phoneNumber"]; ?> to discuss <?php echo $_POST["comment"]; ?>.</p>
	</div>	<!-- ucfirst upercases the first letter of the imput -->

	<img id="phpSloth" src="img/slothPic.jpg" width="200px" alt="pic of sloth in space"> 
</body>
</html>