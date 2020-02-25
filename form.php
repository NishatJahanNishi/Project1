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
<!DOCTYPE html>
<html>
<style>
form {
    border: 1px solid green ;
}

input[type=text],input[type=number],input[type=date] {
    width: 100%;
    padding: 10px 18px;
    margin: 8px ;
    display: inline-block;
    border: 1px solid blue;
    box-sizing: border-box;
}

button {
    background-color:red;
	color:white;
    padding: 14px 20px;
    margin: 8px ;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.4;}
	.cancelbtn{width:100%;}

.container {
    padding: 16px;}
	a:link, a:visited {
    background-color:red;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
a:hover, a:active {
    background-color: red;}
	

</style>
<body>

<h1><?php $msge ?></h1>
<h2>REGISTRATION FOR ADDMISSION</h2>

<form action="form.php" method="post">
  
  <div class="container">
    <label><b>Student's name</b></label>
    <input type="text" placeholder="Enter name" name="name">

    <label><b>Father's name</b></label>
    <input type="text" placeholder="Enter father's name" name="Fname">
	<label><b>Mother's name</b></label>
	<input type="text" placeholder="Enter mother's name" name="Mname">
	<label><b>Present address</b></label>
	<input type="text" placeholder="Enter pre address" name="padd">
    <label><b>Date of birth</b></label>
    <input type="date" placeholder="Enter the date" name="bday">
	<label><b>Age</b></label>
	<input type="number" placeholder="Enter the age" name="quantity">
    <center><input type="submit" name="submitBtn" value="submit"></center>
</div>
</form> 
</body>
</html>


