<?php
	$title = "User List Page";
	include('header.php');

	$conn = mysqli_connect('localhost','root', '', 'usermgt');
	$sql="select * from user";
	$users_obj=mysqli_query($conn, $sql);

	
?>

	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>
	
	<?php 
		echo "<table border='1'>
		<tr>
			<td>Name</td>
			<td>email</td>
			<td>Action</td>
		</tr>";
while($row=mysqli_fetch_assoc($users_obj)){
	echo "
			<tr>
				<td>{$row['name']}</td>
				<td>{$row['email']}</td>
				<td><a href='edit.php'>edit</a> |
				    <a href=''>delete</a>
				</td>
				
		";
}

	echo "</table>";
?>








<?php
	include('footer.php');
?>