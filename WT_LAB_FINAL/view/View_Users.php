<?php
	$title="View employerinfo";
	include 'Header.php';
	require_once('../model/AdminModel.php');
	employerinfo = getAllEmploye();
?>

	<h1>Employe List</h1>

	<nav>
		<a href="Home.php">Back</a> |
		<a href="../controller/Logout.php">logout</a>
	</nav>
	
	<br>

	<div>
		<table border="1">
			<tr>
				<td>Name</td>
				<td>Companyname</td>
				<td>Contactno</td>
				<td>Username</td>
				<td>Password</td>
				
			</tr>

			<?php  for($i=0; $i<count($employerinfo); $i++){ ?>
				<tr>
					<td><?=$employeinfo[$i]['id']?></td>
					<td><?=$employeinfo[$i]['employername']?></td> 
					<td><?=$employeinfo[$i]['companyname']?></td> 
					<td><?=$employeinfo[$i]['contactno']?></td> 
					<td><?=	$employerinfo[$i]['username']?></td> 
					<td><?=	$employerinfo[$i]['password']?></td>
					
					<td>
						<a href="Edit.php?id=<?=$employerinfo[$i]['id']?>">Edit</a> |
						<a href="Delete.php?id=<?=	$employerinfo[$i]['id']?>">Delete</a>
						<a href="Update.php?id=<?=$employerinfo[$i]['id']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
			
		</table>
	</div>

	<br>
	<br>
	<br>

<?php
	include 'Footer.php';
?>