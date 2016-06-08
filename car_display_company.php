<?php
session_start();
$company=$_GET['company'];
$type=$_GET['type'];
$true="true";
$temp=0;
$con=mysqli_connect("localhost","root","root","car_rental");

if($type=="select" && $company=="select" ){
	echo"";
}
else if($type=="select" || $type=="other" ){
$display_data = mysqli_query($con,"SELECT * FROM inventory where car_id in (SELECT car_id FROM car where company='$company')");
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

	$display_car = mysqli_query($con,"SELECT * FROM car where car_id=$row[car_id]");
	$x=mysqli_fetch_array($display_car);
	echo "<tr><td>".$row[car_id]."</td>";
	echo "<td>".$company."</td>";
	echo "<td>".$x[car_type]."</td>";
	echo "<td>".$x[model]."</td>";
	echo "<td>".$row[number_plate]."</td>";
	echo "<td>".$row[color]."</td>";
	echo "<td>".$row[availability]."</td>";
	echo "<td>".$row[price]."</td>";
	echo "<td><input type='radio' name='select' value='".$num."'></td></tr>" ;
}
}


else if($company=="select"){
$display_data = mysqli_query($con,"SELECT * FROM inventory where car_id in (SELECT car_id FROM car where car_type='$type')");
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

	$display_car = mysqli_query($con,"SELECT * FROM car where car_id=$row[car_id]");
	$x=mysqli_fetch_array($display_car);
	echo "<tr><td>".$row[car_id]."</td>";
	echo "<td>".$x[company]."</td>";
	echo "<td>".$x[car_type]."</td>";
	echo "<td>".$x[model]."</td>";
	echo "<td>".$row[number_plate]."</td>";
	echo "<td>".$row[color]."</td>";
	echo "<td>".$row[availability]."</td>";
	echo "<td>".$row[price]."</td>";
	echo "<td><input type='radio' name='select' value='".$num."'></td></tr>" ;
}
}
else{
	$display_data = mysqli_query($con,"SELECT * FROM inventory where car_id in (SELECT car_id FROM car where car_type='$type' and company='$company')");
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

	$display_car = mysqli_query($con,"SELECT * FROM car where car_id=$row[car_id]");
	$x=mysqli_fetch_array($display_car);
	echo "<tr><td>".$row[car_id]."</td>";
	echo "<td>".$x[company]."</td>";
	echo "<td>".$x[car_type]."</td>";
	echo "<td>".$x[model]."</td>";
	echo "<td>".$row[number_plate]."</td>";
	echo "<td>".$row[color]."</td>";
	echo "<td>".$row[availability]."</td>";
	echo "<td>".$row[price]."</td>";
	echo "<td><input type='radio' name='select' value='".$num."'></td></tr>" ;
}
	
}


mysqli_close($con);
?>