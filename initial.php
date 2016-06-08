<?php
session_start();
$db=new mysqli("localhost","root","krish333","test333");
$cars = mysqli_query($db,"SELECT * FROM car ");

?>
<!doctype html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="user_interface.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script  src="user_interface.js"></script>
</head>
<body>
<div class="container">
<h1> Rent Your Favourate Car!! </h1>
  <div class="row">
	<div class="col-sm-4">
		<div class="dropdown">
			<button id="company"class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Company<span class="caret"></span></button>
			Car Company:&nbsp &nbsp &nbsp <select name="companyyy" id="companyyy" >
								
							  </select>
		</div>
	</div>
    <div class="col-sm-4">
		<div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" id="car_type" type="button" data-toggle="dropdown">Car Type<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li id="reset" onclick="typ_reset()">Reset</li><script>function typ_reset() {document.getElementById('car_type').innerHTML = "Car Type<span class='caret'></span>";}</script>
				<li id="sedan" onclick="mysedan()">Sedan</li><script>function mysedan() {document.getElementById('car_type').innerHTML = "Sedan<span class='caret'></span>";}</script>
				<li id="SUV" onclick="mysuv()">SUV</li><script>function mysuv() {document.getElementById('car_type').innerHTML = "SUV<span class='caret'></span>";}</script>
				<li id="Truck" onclick="mytruck()">Truck</li><script>function mytruck() {document.getElementById('car_type').innerHTML = "Truck<span class='caret'></span>";}</script>
			</ul>
		</div>
	</div>
 <div class="col-sm-4">
		<form>
			<input type="text" name="Search" placeholder="Search">
			<button class="btn btn-primary  id="Search" type="button" >Search</button>
		</form>
	</div>
<?php
while ($row = mysqli_fetch_array($cars))
{
	echo "<div class='row'>";
	echo '<div class="col-sm-4"><img src="'.$row['caradd'].'"style="width:304px;height:228px;"><p>'.$row['company'].'</br>'.$row['car_type'].'</br>'.$row['model'].'</p></div>' ;
	echo "</div>";
}
echo "</div></body></html>";

mysqli_close($db);

?>
