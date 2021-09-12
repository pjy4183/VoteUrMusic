
<!DOCTYPE html>
<html>
  
<head>
    <title>Vote Ur Music</title>
	<style>
			.button{
				/* change these properties to whatever you want */
				background-color: #32CD32;
				color: #fff;
				border-radius: 10px;
			}
	</style>
</head>
  
<body>
<?php
	$title = $_POST['title'];
	$artist = $_POST['artist'];
	$img = $_POST['img'];
	$state = $_POST['state'];

	$servername = "localhost";
 	$username = "root";
	$password = "123456";
	$db = "musicdb";

	$conn = mysqli_connect($servername, $username, $password, $db);
	
	$val = $conn->query("select * from testtable where title='$title' AND artist='$artist' AND state='$state'");

	if($val->num_rows != 0)
	{
	   //DO SOMETHING! IT EXISTS!
		$sql = "UPDATE testtable SET count=count+1 WHERE title='$title' AND artist='$artist' AND state='$state'";
	}
	else
	{
		//I can't find it...
		$sql = "INSERT INTO testtable(title, artist, url, created, count, state) VALUES ('$title', '$artist', '$img',NOW(),1, '$state')";
	}

	if ($conn->query($sql) === TRUE) {
		echo "<center>Successfully ADDED: ".$title.",".$artist.",".$state."</center>";
	} else {
		echo "ERROR: ".$sql."<br>".$conn->error;
	}

	$conn->close;
	
	
?>
	<center><button class="button" onclick="goBack()">Go Back to Main Page</button></center>
	<script>
	function goBack() {
	  window.history.back();
	}
	</script>
	</body>
  
</html>