<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 TRANSITIONAL//EN">
<html>
	<body>
		<?php
			$hostname = "localhost";
			$username = "test";
			$password = "test:)";
			$db = "testdb";
			
			$dbconnect=mysqli_connect($hostname,$username,$password,$db);
			
			if ($dbconnect->connect_error){
				die("Database connection failed." . $dbconnect->connect+error);
			}
			
		?>
		
		<table>
			<tr>
				<td>id</td>
				<td>fname</td>
				<td>lname</td>
				<td>program</td>
				<td>city</td>
				<td>yob</td>
			</tr>
				
			<?php
				$query = mysqli_query($dbconnect, "SELECT * FROM student");
				
				while ($row = mysqli_fetch_array($query)) {
					echo
  						`<tr>
    							<td>{$row['id']}</td>
    							<td>{$row['fname']}</td>
    							<td>{$row['lname']}</td>
    							<td>{$row['program']}</td>
    							<td>{$row['city']}</td>
    							<td>{$row['yob']}</td>
   						</tr>/n`;
				}

			?>
		</table>
	</body>
</html>

