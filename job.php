<?php
require_once('conad.php');
$sql="SELECT *FROM tbljob";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<style type="text/css">
th,td{border:1px solid;}
</style>
<body>
<table>
<tbody>
<tr>
<th>Post</th>
<th>Qualification</th>
<th>salary</th>
</tr>
<?php
while($row=mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $row['post'];?></td>
<td><?php echo $row['educational_background'];?></td>
<td><?php echo $row['salary_scale'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
</body>
</html>