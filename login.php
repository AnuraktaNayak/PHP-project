<?php
include("loginser.php");
?>



<!DOCTYPE HTML>
<html>
<head>
<link rel=stylesheet type="text/css" href="login.css">
<title>login</title>

</head>

<body>
<div  class="login">

<form action="login.php" method="POST" >
<b> USERNAME:</b> <input type="text" name="USER"> </br>
<b> PASSWORD:</b> <input type="password" name="PASS"> </br>
<input type="submit" value="SUBMIT">
</div>
<span><?php echo $error;?></span>
</body>

<html>