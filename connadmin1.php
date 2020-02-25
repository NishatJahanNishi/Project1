<?php
include("adminpanel.php");
$log=new users;
extract($_POST);
if($log->users2($e,$p))
{
	$log->url("school.php");
}
else
{
	$log->url("adminpanel1.php?run=failed");
}
?>