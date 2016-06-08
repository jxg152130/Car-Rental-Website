<?php
session_start();
?>
<?php
$con=new mysqli("localhost","root","root","car_rental");
$company_data = mysqli_query($con,"SELECT distinct company FROM car c,inventory i where c.car_id = i.car_id and availability=1");
echo "<option selected='selected'>Company</option>";
while ($row = mysqli_fetch_array($company_data))
{
	
	echo "<option>" .$row['company']."</option>";
}
mysqli_close($con);
?>