<?php
session_start();
?>
<?php
$company=$_GET['company'] ;
$con=new mysqli("localhost","root","root","car_rental");
$type_data = mysqli_query($con,"SELECT number_plate,image,company,model,price FROM car c,inventory i where c.car_id = i.car_id and availability = 1 and company='$company'");
$count=0;		 
while ($row = mysqli_fetch_array($type_data))
{
	$count = $count +1;
	echo "<div class='row'>";
	echo '<div class="col-sm-4"><img src="'.$row['image'].'"style="width:250px;height:180px;"><p>'.$row['company'].'
	'.$row['model'].'</br>$'.$row['price'].'</br><button  id="addtocart" type="button" value="'.$row['c.car_id'].'" >
	<a href= "http://localhost:8888/car_initialize.php?number_plate='.$row['number_plate'].'&price='.$row['price'].'">Add To Cart</a></button></div>' ;
	if($count == 3){
		$count =0;
		echo "</div>";
		echo "<div class='row'>";
		
		
	}
} 
mysqli_close($con);
?>