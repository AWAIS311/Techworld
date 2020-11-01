<html>
	<head>
		<title> Second Page</title>
	</head>
	<body>
	<table bgcolor="yellow" border="2" align="center" cellspacing="0">
		<form action="Assignment_02_C.php" target="Assignment_02_C.php">
<?php			if(isset($_GET['submit_1']))
			{
				$num=$_GET['count'];
		
?>				<input type="hidden" name="number" value= <?php echo $num ?> >
<?php				for($counter=1; $counter<=$num; $counter++)
				{ ?>	
					<tr>
						<td>
							<span> Name : </span> 
							<input type"text" name= <?php echo "name".$counter?> > </td>
						<td>
							<span> Gender: </span>
							<input type="radio" name= <?php echo "gender".$counter?> value="Male" checked/>Male 
							<input type="radio" name=<?php echo "gender".$counter?> value="Female" />Female </td>
						<td> 
							<select name=<?php echo "province".$counter?> >
								<option selected>Select Province</option>
								<option>Sindh</option>
								<option>Punjab</option>
								<option>Balochistan</option>
								<option>Khyber Pakhtunkhwa</option>
						     </select><br/><br/></td>
					</tr>
          		<?php } ?>
					<tr>
						<td align="center" colspan="4"> <input type="submit" name="submit_2" value="Submit Data"/> </td>
					</tr>
		<?php } ?>
		</form>
	</table>
	</body>
</html>
