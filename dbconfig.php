

<?php
try{
$connection = mysqli_connect("localhost","root", "root","car_rental") ; // Establishing connection with server..
//$db = mysql_select_db(); // Selecting Database.
$username=$_POST['user_name']; // Fetching Values from URL.
$email=$_POST['user_email'];
$password= $_POST['password1']; // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$licence= $_POST["licence"];	
	$address= $_POST["address"];	
 // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

mysqli_query($connection,"SELECT * FROM users_table WHERE user_email='$email'");
//$data = mysql_num_rows($result);
if(mysqli_affected_rows($connection)==0){
mysqli_query($connection,"Insert into users_table  (user_name,user_email,user_password,licence_no,address) values('$username','$email','$password','$licence','$address')"); // Insert query
	
 if(mysqli_affected_rows($connection)>0){
echo "You have Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
	echo "User is already registered";

}
}
catch(PDOException $e)
    {
    echo $result . "<br>" . $e->getMessage();
    }
mysqli_close ($connection);
?>