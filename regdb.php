<?php

 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

//Database connection
$conn= new mysqli('localhost', 'nimco', 'Farxaan143!','GreenBookSystem');
if($conn->connect_error){
die ('Failed to connect: '.$conn->connect_error);
}
else {
    $stmt = $conn->prepare("INSERT INTO register(fname,lname,phone,email,password)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$fname,$lname,$phone,$email,$password);
    $stmt->execute();
    echo "Registratoin Successfully...";
    $stmt->close();
    $conn->close();
 
}


?>