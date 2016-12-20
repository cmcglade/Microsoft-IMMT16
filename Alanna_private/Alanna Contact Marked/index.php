<!doctype html>
<html>
<head><!--you lost marks on details: didn't include a screen grab of your code validation, 
    your results is not exactly as assigned, didn't include your name on your folder.  Your code and styling is very good
but pay attention to those other details!-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Page</title>
</head>
<body>
    
    <header>
        <h1>Interested In Working With <span>Me</span>?
                    <br>Send Me a Message</h1>
        <hr>
    </header>
    
    <div id="portfolio">
        <h2>Check out my portfolio <span>&gt;</span> <a href="http://www.amartin.ca">here</a> <span>&lt;</span></h2>
        
        <ul>
            <li>Learn</li>
            <li>Create</li>
            <li>Experience</li>
        </ul>
        
    </div>

    <div id="form">
        <h3>Connect With Me</h3>
        <form method="POST" >

            <label>First Name</label><input name="fname" type="text" placeholder="First Name">
            <label>Last Name</label><input name="lname" type="text" placeholder="Last Name">
            <label>Email</label><input name="email" type="email" placeholder="Email">
            <label>Phone number</label><input name="number" type="tel" placeholder="Phone Number">
            <label>Password</label><input name="password" type="password" placeholder="Password">
            <label>Message</label><textarea name="message" placeholder="Message"></textarea>
            <input id="submit" name="submit" type="submit" value="Submit">

        </form>
    
        <?php

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $password = $_POST['password'];
            $message = $_POST['message'];

            if(isset($_POST['submit'])) {

            echo "<p> Thanks $fname $lname, you will hear back from me soon </p>";}

        ?>

    </div>
    
    
    
    
</body>
</html>