<?php 

	
		echo 'invalid data';
		$name=$_POST['search'];
		$conn = mysqli_connect('localhost', 'root', '', 'product_db');

	$sql = "select * from products where name like '$name%'";
                    
	$result = mysqli_query($conn, $sql);

	
	echo "<table border=1> 
			<tr>
				<td>Name</td>
				<td>Profit</td>
			</tr>
";
	echo "</table>";
	
?>