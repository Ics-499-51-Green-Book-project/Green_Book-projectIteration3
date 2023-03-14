
<?php
$email=$_POST['email'];
$password=$_POST['password'];

//Database connection
$connection= new mysqli('localhost', 'nimco', 'Farxaan143!','GreenBookSystem');
if($connection->connect_error){
die ("Failed to connect: ".$connection->connect_error);
}
else {
    $stmt = $connection->prepare("select * from register where email=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result= $stmt->get_result();
    if ($stmt_result->num_rows>0){
        $data=$stmt_result->fetch_assoc();
        if ($data['password']===$password){
            echo"<h2>Login Successfully</h2>";
            header("location: index.php");
        
        }else {
        echo"<h2>Invalid  Password</h2>";       
    }
}else 
echo "<h2>Invalid Username</h2>";


}
?>
