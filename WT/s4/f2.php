<?php

session_start();

$eno = $_GET['eno'];

$ename = $_GET['ename'];

$eadd = $_GET['eaddress'];


$_SESSION['eno'] = $eno;

$_SESSION['ename'] = $ename;

$_SESSION['eadd'] = $eadd;

?>


<html>

<body>


<form action="f3.php" method="post">

<center>

<h2>Enter Earnings of Employee:</h2>


<table>

<tr><td>Basic : </td><td><input type="text" name="ebasic"></td><tr>

<tr><td>DA : </td><td><input type="text" name="eda"></td></tr>

<tr><td>HRA : </td><td><input type="text" name="ehra"></td></tr>

<tr><td></td><td><input type="submit" value=Next></td></tr>

</table>

</center>

</form>

</body>

</html>
