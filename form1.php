<?php
require_once('connect.php');
$msge='';
if(isset($_POST['submitBtn'])){
	$student_name=$_POST('name');
	$Father_name=$_POST('Fname');
	$Mother_name=$_POST('Mname');
	$Present_address=$_POST('padd');
	$Birth=$_POST('bday');
	$Age=$_POST('quantity');
	$sql="INSERT INTO tbl_res(Student_name,Father_name,Mother_name,Present_address,Birth,Age) VALUES('$student_name','$Father_name','$Mother_name','$Present_address','$Birth','$Age')";
	$con->query($sql);
	if($con->error){
		echo $con->error;
	}
	else{
		echo 'Insert successful';
	}
}?>
