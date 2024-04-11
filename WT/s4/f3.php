<?php

session_start();


$basic = $_POST['ebasic'];

$da = $_POST['eda'];

$hra= $_POST['ehra'];


$total = $basic+$da+$hra;


echo "<h3>Employee Details</h3> ";

echo "Name : ".$_SESSION['eno']."<br>";

echo "Address : ".$_SESSION['ename']."<br>";

echo "Class : ".$_SESSION['eadd']."<br><br>";


echo "basic : ".$basic."<br>";

echo "DA : ".$da."<br>";

echo "HRA : ".$hra."<br>";



echo "<h2>Total Of Earnings Is : ".$total."</h2>";

?>
