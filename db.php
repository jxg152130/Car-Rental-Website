<?php
if(isset($_POST["user_email"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    $mysqli = new mysqli('host' , 'root', 'root', 'car_rental');
    if ($mysqli->connect_error){
        die('Could not connect to database!');
    }
    
    $user_email = filter_var($_POST["user_email"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $mysqli->prepare("SELECT email FROM user_list WHERE user_email=?");
    $statement->bind_param('s', $user_email);
    $statement->execute();
    $statement->bind_result($user_email);
    if($statement->fetch()){
        die("<b>Hello world not!</b>");
    }else{
        die("<b>Hello world!yes</b>");
    }
}
?>