<?php
include("adminpanel.php");
$reg=new users;
extract($_POST);
$query="INSERT INTO users1 VALUES('$i','$e','$p')";
if($reg->users1($query))
{
	$reg->url("adminpanel1.php?run=success");
}?>