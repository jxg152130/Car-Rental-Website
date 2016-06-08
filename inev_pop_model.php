<?php
session_start();
$company=$_GET['company'] ;
$type=$_GET['type'] ;
$temp="select";
$con=new mysqli("localhost","root","root","car_rental");

echo "<option>select</option>";

if($company==$temp){	
		
}
else
{
$model_data = mysqli_query($con,"SELECT distinct model FROM car where company='".$company."' and car_type='".$type."'");

while ($row = mysqli_fetch_array($model_data))
{
	echo "<option>" .$row['model']."</option>";
}
echo "<option>other</option>";

}
 
mysqli_close($con);
?>