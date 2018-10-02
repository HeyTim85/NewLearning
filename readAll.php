<?php
        $host = "localhost";
	$db = "cis475";
	$user = "tim";
	$pwd = "mypasswd";
	

        
        
	$conn = new mysqli($host,$user,$pwd,$db);
	if ($conn->connect_error) die($conn->connect_error);
        
   
        
        
        
   	$query = "SELECT * FROM Student JOIN Enrollment JOIN Course";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
         $rows =$result->num_rows;
      
	
	for($i=0;$i<$rows;$i++)
	{
                echo "<table><tr> <th>EnrollmentID</th><th>CourseID<th><th>Title</th><th>Credits</th><th>Credits</th><th>StudentID</th><th>LastName</th><th>FirstMidName</th><th>Grade</th><th>EnrollmentSemester</th>";
		$result->data_seek($i);
		echo $result->fetch_assoc()['EnrollmentID'] . '     ';
		$result->data_seek($i);
		echo $result->fetch_assoc()['CourseID'] . '     ';
		$result->data_seek($i);
		echo $result->fetch_assoc()['Title'] ;
		$result->data_seek($i);
                
                $result->data_seek($i);
		echo $result->fetch_assoc()['Credits'] . '     ';
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
	
echo "</table>";

	$result->close();
	
	$conn->close();






?>





        <form action="readAll.php" method="post"><pre>
	
	     <input type="submit" value="Show all enrollments">
	</pre></form>
