<!DOCTYPE HTML>
<html>
<title>Thank You! </title>
    <head>
        <link rel="stylesheet" type="text/css" href="form.css">
    </head>  
<body>

<?php
$FName = $_POST["firstname"];
$LName = $_POST["lastname"];
$Phone = $_POST["phone"];
$hobby = $_POST["hobby"];

echo "<p> Thank you $FName $LName for submitting your information. <br>
We will contact you soon at $Phone to discuss about your favorite hobby, $hobby </p>";
?>

</body>
</html>