<?php
$oneprice=$_GET['oneprice'] ;
$no_days = $_GET['days'];
$total = $oneprice * $no_days;
echo "$".$total.".00";
?>