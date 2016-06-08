<?php
session_start();
$company=$_GET['company'] ;
$type=$_GET['type'] ;
$model=$_GET['model'] ;
$true="true";
$temp=0;
$con=mysqli_connect("localhost","root","root","car_rental");
$display_data = mysqli_query($con,"SELECT * FROM inventory where car_id in (SELECT car_id FROM car where company='$company' and car_type='$type'and model='$model')");
while ($row = mysqli_fetch_array($display_data))
{
	$num=$row[number_plate];
	if($temp==0){
	echo "<tr><th>car_id</th>";
	echo "<th>company</th>";
	echo "<th>type</th>";
	echo "<th>model</th>";
	echo "<th>number_plate</th>";
	echo "<th>color</th>";
	echo "<th>availability</th>";
	echo "<th>price</th>";
	echo "<th>select</th></tr>" ;
	}$temp=1;
	if($row[availability])
	{
		$row[availability]='true';
	}
	else
	{
		$row[availability]='false';
	}

	
	echo "<tr><td>".$row[car_id]."</td>";
	echo "<td>".$company."</td>";
	echo "<td>".$type."</td>";
	echo "<td>".$model."</td>";
	echo "<td>".$row[number_plate]."</td>";
	echo "<td>".$row[color]."</td>";
	echo "<td>".$row[availability]."</td>";
	echo "<td>".$row[price]."</td>";
	echo "<td><input type='radio' name='select' value='".$num."'></td></tr>" ;
}
mysqli_close($con);
?>