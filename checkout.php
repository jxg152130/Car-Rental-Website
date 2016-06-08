<?php
session_start();
try{
$pri= $_GET["price"];
//$no_of_days=1;
//echo $pri;
$no_of_days= $_GET["days"];
//$car_id=$_GET["car_id"];
$price = $pri * $no_of_days;
$number_plate=$_GET["number_plate"];
$date_out = date("Y/m/d");
//$due_date= date('Y/m/d', strtotime($date_out. ' + '.$no_of_days.' days'));

  $due_date=strftime("%Y/%m/%d", strtotime("$date_out +$no_of_days day"));
//$due_date=date("Y/m/d", $date);
$user_id=$_SESSION["user_id"];



$connection = mysqli_connect("localhost","root", "root","car_rental") ; 
mysqli_query($connection,"select * from cart where user_id= $user_id and date_in is null");
if(mysqli_affected_rows($connection)==0){

mysqli_query($connection,"insert into cart(user_id,
 date_out,
 due_date, 
 no_of_days,
 number_plate, 
 AMOUNT_pay) values($user_id,'$date_out','$due_date',$no_of_days, '$number_plate', $price)");  
 /* mysqli_query($connection,"insert into cart(user_id,
 date_out,
 due_date, 
 no_of_days,
 number_plate, 
 AMOUNT_pay) values('$user_id','$date_out','$due_date','$no_of_days', 'tx_123', 20)"); */
 mysqli_query($connection, "update inventory set availability=0 where number_plate='$number_plate'"); 
 echo "Your Car booked and Due date is: ".$due_date;
// echo '<button><a class="page-scroll" href="http://localhost:8888/logout.php">Log Out</a></button>';
}
else
	echo "Sorry, only one car can be booked at a time";
}
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }
mysqli_close ($connection);

?>