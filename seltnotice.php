<?php
require_once('conad.php');
$sql="SELECT *FROM tbltnotice";
$result=$con->query($sql);
?>

<!DOCTYPE html>
<html>
<style type="text/css">
th,td{border:1px solid;}
</style>
<body>
<center><img src="schlogo.png"></center>
<marquee>GOVERNMENT HIGH SCHOOL</marquee>
<p><b>Notice for teachers:</b></p>
<table>
<tbody>
<tr>
<th>Topic</th>
<th>Date and time</th>
<th>Description</th>
</tr>
<?php
while($row=mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $row['Topic'];?></td>
<td><?php echo $row['DateandTime'];?></td>
<td><?php echo $row['Description'];?></td>
</tr>
<?php } ?>

</tbody>
</table>
</body>
</html>