<!DOCTYPE html>
<html>
	<head>
		<title>Third Page</title>
	</head>
	<body>
		<form>
		<table bgcolor="blue"border="1" align="center">
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Province</th>
			</tr>
<?php
		$num = $_GET['number'];		
		for($counter=1; $counter<=$num; $counter++)
		{ ?>
			<tr>
				<td><?php echo $_GET["name".$counter]; ?></td>
				<td><?php echo $_GET["gender".$counter]; ?></td>
				<td><?php echo $_GET["province".$counter]; ?></td>
			</tr>
<?php	}?>
		</table>
		</form>
	</body>
</html>