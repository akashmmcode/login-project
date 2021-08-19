<?php

include 'session_mgmt.php';
begin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>welcome</title>
</head>
<body>
    <h1> WELCOME</h1><?php 
	if ($_SESSION["username"]!="")
	{
        echo $_SESSION["username"];?>
        <a href="logout.php">next page</a>
        <?php 
	}else
	{
       // header("Location: login.php");
	   finish();
    }
?>
</body>
</html>