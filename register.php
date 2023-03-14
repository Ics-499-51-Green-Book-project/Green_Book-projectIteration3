<?php


?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="css/register.css">
    </head>
    <body>
        <div class ="registerbox">
            
            <h1>registion form</h1>
            <form action ="regdb.php" method="post">
                <p> First Name</p>
                <input type = "text" name = "fname" placeholder="Your first Name"required>
                <p> Last Name</p>
                <input type = "text" name= "lname" placeholder="Your last Name">
                <p>Phone Number</p>
                <input type = "number" name= "phone" placeholder="Phone Number" required>
                <p> Email</p>
                <input type = "email" name= "email" placeholder="Email"required>
                <p> Password</p>
                <input type = "password" name = "password" placeholder="Password"required></br>    
                <button type ="submit"> Sign Up</button>
            
                
      
                </form>
        </div>
    </body>
</html>
