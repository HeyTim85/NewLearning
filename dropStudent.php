<!DOCTYPE html>
<html>
    <head><title>Drop a Student</title>
        <style>body{text-align: center;}</style>
        
    </head>
    <body>
        <a href="dropRecord.php">Back to drop options</a>
        <h1>Drop Student</h1>
        <hr />
        <form method="post" action="dropStudent.php">
            <label>To drop a record please enter:</label><br />
            StudentID: 
            <input type="text" name="studentID" placeholder="2.." /><br />
            LastName:
            <input type="text" name="lastName" placeholder="Alonso.." /><br />
            FirstMidName: 
            <input type="text" name="firstMidName" placeholder="Meredith.." /> <br />
            
            <input type="submit" name="submit" value="Drop" />
        </form>
    </body>
</html>
<?php

    $host = "localhost";
    $user = "tim";
    $pass = "mypasswd";
    $db = "CIS475";

    if (isset($_POST['submit'])) {
        
        $student_id = filter_var($_POST["studentID"], FILTER_SANITIZE_STRING);
        $lastName = filter_var($_POST["lastName"], FILTER_SANITIZE_STRING);
        $firstMidName = filter_var($_POST["firstMidName"], FILTER_SANITIZE_STRING);
        
        $conn = mysqli_connect($host, $user, $pass, $db);
        
        if (!$conn) {
            die("Connection NOT established: " . mysqli_connect_error());
        }
        
        if($student_id=='' || $firstMidName=='' || $lastName==''){
	       echo"Error! Make sure you entered a valid inputs";
        }
        
        // sql statement to check later if StudentID, LastName, and FirstMidName exist in table
        $query = 'SELECT StudentID, LastName, FirstMidName FROM Student WHERE StudentID="'.$student_id.'" AND LastName="'.$lastName.'" AND FirstMidName="'.$firstMidName.'"';

        $result = mysqli_query($conn, $query);
        
        if($result){
            if(mysqli_num_rows($result) > 0){ // if there's a record in table
   
                $sql = 'DELETE FROM Student WHERE StudentID = "'.$student_id.'"';
      
                if(mysqli_query($conn, $sql)){
                    echo "Student: <b>".$lastName.", ".$firstMidName."</b> was dropped successfully<br /><b>Enrollments</b> dropped as well!";
                }
                
                else {
                    echo "Error!! ".mysqli_error($conn);
                }
            }
            else {
                // record doesn't exists
                echo "Error!! Student: <b>".$lastName.", ".$firstMidName."</b> does NOT exist.!!!";
            }
        }
    mysqli_close($conn);
    }
?>