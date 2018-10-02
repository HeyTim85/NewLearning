<?php

//I was going to list the possible students to see which student to select before submiting a grade
//When I created and deleted some rows in the student section it messed up my count
	$host = "localhost";
	$db = "cis475";
	$user = "tim";
	$pwd = "mypasswd";
	
	$conn = new mysqli($host,$user,$pwd,$db);
	if ($conn->connect_error) die($conn->connect_error);
        
        
        
        
        
        
        
        $query = "SELECT * FROM Student JOIN Enrollment WHERE Grade = '0'";
        $result = $conn->query($query);
	if(!$result) die($conn->error);
        echo "<table><tr> <th>EnrollmentID</th><th>CourseID<th><th>StudentID</th><th>LastName</th><th>FirstMidName</th><th>Grade</th><th>EnrollmentSemester</th>";
  
	
         $rows =$result->num_rows;
        
        	for($i=0;$i<$rows;$i++)
	{
                echo "<table><tr> <th>EnrollmentID</th><th>CourseID<th><th>StudentID</th><th>LastName</th><th>FirstMidName</th><th>Grade</th><th>EnrollmentSemester</th>";
		$result->data_seek($i);
		echo $result->fetch_assoc()['EnrollmentID'] . '     ';
		$result->data_seek($i);
		echo $result->fetch_assoc()['CourseID'] . '     ';
		$result->data_seek($i);

		echo $result->fetch_assoc()['StudentID'] . '     ';
		$result->data_seek($i);
		echo $result->fetch_assoc()['LastName'] . '  ';
		$result->data_seek($i) . '<br>';
                               $result->data_seek($i);
		echo $result->fetch_assoc()['FirstMidName'] . '     ';
		$result->data_seek($i);
		echo $result->fetch_assoc()['Grade'] . '     ';
		$result->data_seek($i);
		echo $result->fetch_assoc()['EnrollmentSemester'] . ' <br>  ';
		$result->data_seek($i) . '<br>';
		
	}

?>
<form action="Student.php" method="post"><pre>
	Last  Name <input type="text" name="LastName">
	First Name <input type="text" name="FirstMidName">
	Grade <input type="text" name="Grade">

	<input type="submit" value="Add Grade">
	</pre></form>