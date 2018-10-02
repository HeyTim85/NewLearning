
<?php
	$host = "localhost";
	$db = "cis475";
	$user = "tim";
	$pwd = "mypasswd";
	
	$conn = new mysqli($host,$user,$pwd,$db);
	if ($conn->connect_error) die($conn->connect_error);
	
	
	if(isset($_POST['LastName']) && isset($_POST['FirstMidName']))
	{
		$LastName = $conn->real_escape_string($_POST['LastName']);
		$FirstMidName = $conn->real_escape_string($_POST['FirstMidName']);
                
                
                $query = "INSERT INTO student VALUES" . "('$LastName','$FirstMidName',' ')";
		$result = $conn->query($query);
		if(!$result) die("INSERT failed");
		

		
		$query = "SELECT * FROM student";
		$result = $conn->query($query);
		if(!$result) die("Database access failed");
                
                //assignment notes Put button to enter inputs. ID column auto inclement or look at sql first and add 1 number on top of that number.
//Select everything from rows and count the number of rows. At very end if server request = post array to see if something is posted.
//Or use set arrayed
//If you want to autoincrement you have to change you table as integer.
        }
        
        ?>

<form action="Student.php" method="post"><pre>
	Last  Name <input type="text" name="LastName">
	First Name <input type="text" name="FirstMidName">
	
	<input type="submit" value="Add Record">
	</pre></form>