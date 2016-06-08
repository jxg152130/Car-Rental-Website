<?php
session_start();
$_SESSION["username"] = "sai";
$_SESSION["user_id"] = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="user_interface.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript"  src="user_test2.js"></script>
  <script  type="text/javascript" src="User_interface.js"></script>
  <script type="text/javascript" src="user_functions.js"></script>
  <script type="text/javascript" src="user_typeload.js"></script>
</head>
<body id = "cart"><center>
<div class="container-fluid">
<h1 id="heading"> Rent Your Favourate Car!! </h1>
  <div class="row">
	<div class="col-sm-3">
		
			<select name="companyyy" id="company" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onChange="changeSecond(this.value)"  >
								
							  </select>
							  </div>
	<div class="col-sm-3">
			<select name="type" id="type" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onChange="display(this.value)" >
								
							  </select></div>
	
								
	<div class="col-sm-3">
		<button   id="reset" type="button" onClick="reset()" >Reset Filters</button>
	</div>
	<div class="col-sm-3">
		<form>
			<input type="text" name="Search" id="ser_content" placeholder="Search">
			<button type="button" id="ser_submit" onClick="search()">Search</button>
		</form>
	</div>
	

</div></div>
<div class="container" id = "load"></div></center></body></html>

