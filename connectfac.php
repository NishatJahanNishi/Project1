<?php
$con=new mysqli('localhost','root','','faculty');

if($con->connect_errno>0)
{echo $con->connect_error;
die();
}
else{
echo '!';}

?>