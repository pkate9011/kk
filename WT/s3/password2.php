<?php

 

 setCookie("setname",$_POST['username'],time()+60*60*1);

 setCookie("setpass",$_POST['password'],time()+60*60*1);

header('Location: password3.php');
exit;

 ?>

 

