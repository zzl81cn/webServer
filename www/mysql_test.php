<?php
	// $conn = mysqli_connect("localhost", "root", "zzl81cn");
	$conn = mysql_connect("localhost", "root", "zzl81cn");
	if(!$conn) {
		die('Could not connect ' . mysql_error());
	} else {
		echo 'Database connected successfully';
	}
	mysql_close($conn);
?>