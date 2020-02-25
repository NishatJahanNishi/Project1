<?php
require_once('conad.php');
$sql="SELECT *FROM tblsnotice";
$result=$con->query($sql);
?>

<!DOCTYPE html>
<html>
<style type="text/css">
th,td{border:1px solid;}
</style>
<body bgcolor="white">
<center><img src="schlogo.png"></center>
<marquee>GOVERNMENT HIGH SCHOOL</marquee>
<p><b>Notice for students:</b></p>
<p>This notices are updated after several time. So, check it quickly</p>
<p><b>EXAMINATION DATE</b></p> 
<table>
<tbody>
<tr>
<th>Class</th>
<th>Date and time</th>
<th>subjectname</th>
</tr>
<?php
while($row=mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $row['Class'];?></td>
<td><?php echo $row['DateandTime'];?></td>
<td><?php echo $row['Subjectname'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
<form method="post" action="com.php">
<p><b>COMMENT:</b></p>
				<tr>
                <td><textarea rows="4" cols="50" name="com"></textarea></td>
            </tr>
</br>

<button type="submit">Apply</button>
</form>

</body>
</html>