<?php
session_start();
?>
<?php
$number_plate = $_GET['number_plate'];
$price = $_GET['price'];
$con=new mysqli("localhost","root","root","car_rental");
$company_data = mysqli_query($con,"SELECT * FROM car c,inventory i where c.car_id = i.car_id and number_plate = '$number_plate'");
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
</head>
<body ><center>

<div class="container-fluid">
<script>
function changeprice(no_days){
	var php_var = "<?php echo $price; ?>";
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("agg_price").innerHTML=res;
            }
          }
		xmlhttp.open("GET","cart.php?oneprice="+php_var+"&days="+no_days,true);
        
		xmlhttp.send();
}
</script>




<?php
while ($row = mysqli_fetch_array($company_data))
{
echo "<div class='row'>";
	echo '<div class="col-sm-8"><img src="'.$row['caradd'].'"style="width:500px;height:500px;"><p>'.$row['company'].'  '.$row['model'].'</p></div>' ;
	echo '<div class="col-sm-2"><select id="no_of_days" name="days"  class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onChange="changeprice(this.value)" >
	
  <option selected="selected" value="1">No of Days</option>
  <option  value="2">2</option>
  <option  value="3">3</option>
  <option  value="4">4</option>
  <option  value="5">5</option>
  <option  value="6">6</option>
  <option  value="7">7</option>
  <option  value="8">8</option>
  <option value="9">9</option>
  
  </select></div>';
  echo '<div  id="divtag" value ="'.$price.'" class="col-sm-2"><p id="agg_price" >$'.$price.'</p></div>';
		echo "</div>";
		echo '<div class="row"><div class="col-sm-12"><button  id="checkout" type="button"><a href= "http://localhost:8888/car_initialize.php?number_plate='.$row['number_plate'].'&price='.$row['price'].'&no_of_days='.'">Check Out</button></div></div>';
		echo '</div></center></body></html>';
}
mysqli_close($con);
?>