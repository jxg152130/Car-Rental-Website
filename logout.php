<?php
// Start the session
session_start();
unset($_SESSION["username"]); 
unset($_SESSION["role"]);
unset($_SESSION["user_id"]); // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
 header("Location: http://localhost:8888/index.php");
?>