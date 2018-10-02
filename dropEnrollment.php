<!DOCTYPE html>
<html>
    <head><title>Drop Enrollment</title>
        <style>body{text-align: center;}</style>
        
    </head>
    <body>
        <a href="dropRecord.php">Back to drop options</a>
        <h1>Drop Enrollment</h1>
        <hr />
        <form method="post" action="dropEnrollment.php">
            <label>Enter the following information to drop a student's enrollment:</label><br />
            Student ID: 
            <input type="text" name="studentID" placeholder="2.." /><br />
            Course ID:
            <input type="text" name="courseID" placeholder="1050.." /><br />
            Enrollment Semester: 
            <input type="text" name="enrollmentSemester" placeholder="FA16.." /> <br />
            
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
        $course_id = filter_var($_POST["courseID"], FILTER_SANITIZE_STRING);
        $enrollment_semester = filter_var($_POST["enrollmentSemester"], FILTER_SANITIZE_STRING);
        
        $conn = mysqli_connect($host, $user, $pass, $db);
        
        if (!$conn) {
            die("Connection Unestablished: " . mysqli_connect_error());
        }
        
        if($student_id=='' || $course_id=='' || $enrollment_semester==''){
	       echo"Error! Make sure you entered a valid inputs";
        }
        
        $query = 'SELECT StudentID, CourseID, EnrollmentSemester FROM Enrollment WHERE StudentID="'.$student_id.'" AND CourseID="'.$course_id.'" AND EnrollmentSemester="'.$enrollment_semester.'"';
        
        $result = mysqli_query($conn, $query);
        
        if($result){ 
            if(mysqli_num_rows($result) > 0){ // if there is a record, at least 1
                $sql = 'DELETE FROM Enrollment WHERE StudentID = "'.$student_id.'" AND CourseID = "'.$course_id.'" AND EnrollmentSemester = "'.$enrollment_semester.'"';
      
                if(mysqli_query($conn, $sql)){
                    echo "Student enrollment ID <b>(".$student_id.")</b> and course ID <b>(".$course_id.")</b> dropped successfully";
                }
                
                else {
                    echo "Error!! ".mysqli_error($conn);
                }
            }
            else {
                // record doesn't exists
                echo "<b>Error!! This record does not exist.!!!</b>";
            }
        }
    mysqli_close($conn);
    }
?>