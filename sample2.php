<?php require_once('conad.php');?>
<!DOCTYPE html>
<html>
<body>
<?php
$sql="SELECT *FROM tblad WHERE idno=".$_GET['idno'];
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
?>
<form action="addmisixtoeight.php" method="post">
<p><label for="class">Class:</label></p>
<p><input type="text" name="class" value=""></p></br>
<p><label for="date">Date:</label></p>
<p><input type="text" name="date" value=""></p></br>
<p><label for="time">Time:</label></p>
<p><input type="text" name="time" value=""></p></br>
<p><label for="idno">Idno:</label></p>
<p><input type="text" name="idno" value="<?php echo $_GET['idno'];?>"></p></br>
<p><input type="submit" name="updateBtn" value="UPDATE"></p>
</form>
</body>
</html>