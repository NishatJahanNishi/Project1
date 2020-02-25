<?php
require_once('connectfac.php');
$sql="SELECT *FROM tblfac";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<style type="text/css">
th,td{border:1px solid;}
</style>
<body>
<h1 style="color:#000033"><center> GOVERNMENT HIGH SCHOOL </center>
</h1>
<center><h2><img src="fac5.jpg" style="width:400px;height:200px;"></h2></center>
<marquee>WHERE NATION ARE BUILD</marquee>
<center><table></center>
<tbody>
<tr>
<th>Subno</th>
<th>Subname</th>
<th>Supervisorname</th>
</tr>
<?php
while($row=mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $row['Subno'];?></td>
<td><?php echo $row['Subname'];?></td>
<td><?php echo $row['Supervisorname'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
</br>
<footer>Allrights@reserved:School.ac.bd</footer>
</body>
</html>
