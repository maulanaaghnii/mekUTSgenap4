
<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nomor HP</td>
				<td><input type="text" name="kontak_tamu"></td>
			</tr>
			<tr> 
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama_tamu"></td>
			</tr>
			<tr> 
				<td>Kamar Kunjungan </td>
				<td><input type="text" name="no_kamar"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$kontak_tamu = $_POST['kontak_tamu'];
		$nama_tamu = $_POST['nama_tamu'];
		$no_kamar = $_POST['no_kamar'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(kontak_tamu,nama_tamu,no_kamar) VALUES('$kontak_tamu','$nama_tamu','$no_kamar')");
		
		header("Location: index.php");
		// Show message when user added
		echo "DOSEN added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>