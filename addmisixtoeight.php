<?php
require_once('conad.php');
$sql="SELECT *FROM tblad";
$result=$con->query($sql);
$sql1="SELECT *FROM tblsyl";
$result1=$con->query($sql1);?>
<!DOCTYPE html>
<html>
<style type="text/css">
th,td{border:1px solid;}
</style>
<body>
<p><b>Addmission date & marks distribution:</b></p>
<table>
<tbody>
<tr>
<th>Class</th>
<th>Date</th>
<th>Time</th>
</tr>
<?php
while($row=mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $row['Class'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['time'];?></td>
</tr>
<?php } ?>
<tr>
<th>subjectname</th>
<th>Marks</th>
</tr>

<?php
while($row1=mysqli_fetch_array($result1)){?>
<tr>
<td><?php echo $row1['subject'];?></td>
<td><?php echo $row1['marks'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
</body>
</html>