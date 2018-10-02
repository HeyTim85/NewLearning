<?php
	if(isset($_GET['Username']))
	{
		$host = "localhost";
		$db = "publications";
		$user = "tim";
		$pwd = "mypasswd";
	
		$conn = new mysqli($host,$user,$pwd,$db);
		if ($conn->connect_error) die($conn->connect_error);
		
		$sanitizedUsername = sanitizeString($_GET['Username']);
		$query = "SELECT * FROM users WHERE username='$sanitizedUsername'";
		$result = $conn->query($query);
		if($result->num_rows == 0)
			echo "This username is available";
		else
			echo "This username is taken";
	}
	
	
	function sanitizeString($string)
	{
		$output = stripslashes(htmlentities(strip_tags($string)));
		return $output;
	}

?>