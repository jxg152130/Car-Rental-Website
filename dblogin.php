<?php
// Start the session
session_start();
?>

<?php
try {
$connection = mysqli_connect("localhost","root", "root","car_rental") ; // Establishing connection with server..

$email=$_POST['user_email'];
$password1= $_POST['password1']; // Password Encryption, If you like you can also leave sha1.

$result= mysqli_query($connection,"SELECT * FROM users_table WHERE user_email='$email' and user_password='$password1'");
$_SESSION["username"]="";
$_SESSION["role"]="";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
        
		$_SESSION["user_id"]=$row["user_id"];
		$_SESSION["username"] =$row["user_name"];
		$_SESSION["role"] =$row["role"]; 
    }
	
} else 
    echo "Invalid email/password";
 if($_SESSION["role"]==="U")
	echo "U";
//echo "valid email/password";
if($_SESSION["role"]==="A")
	echo "A";
//echo "Invalid email/password else".$password1;
}
catch(PDOException $e)
    {
    echo $result . "<br>" . $e->getMessage();
    }
mysqli_close ($connection);
?>