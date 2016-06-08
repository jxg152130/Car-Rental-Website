
<?php
session_start();
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("upload/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}
else
{
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "car_images/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
}
}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}


$old=$_GET['old'];
$company=$_GET['company'];
$model=$_GET['model'];
$type=$_GET['type'];
$color=$_GET['color'];
$price=$_GET['price'];
$plate=$_GET['plate'];
$image=$_GET['image'];

$con=mysqli_connect("localhost","root","root","car_rental");

if($old==1)
{
	$code=mysqli_query($con,"select car_id from car where company='$company' and car_type='$type' and model='$model'");
	while ($row = mysqli_fetch_array($code)){
	$car_id=$row[car_id];
	}
	mysqli_query($con,"insert into inventory values ($car_id,'$plate','$color',true,$price,'$image' )");
}

else
{
	mysqli_query($con,"insert into car(company,car_type,model) values ('$company','$type','$model')");
	$code=mysqli_query($con,"select car_id from car where company='$company' and car_type='$type' and model='$model'");
	while ($row = mysqli_fetch_array($code)){
	$car_id=$row[car_id];
	}
	
	mysqli_query($con,"insert into inventory values ($car_id,'$plate','$color',true,$price,'$image')");	
}
mysqli_close($con);
?>