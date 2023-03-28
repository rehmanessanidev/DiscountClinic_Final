<?php
ob_start();
session_start();

if(isset($_SESSION['username']))
{
	unset($_SESSION['username']);

}

header("Location: login.php");
die;