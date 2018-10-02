<!DOCTYPE html>
<html>
    <head>
        <title>Drop a Course</title>
        <style>body{text-align: center;}</style>
    </head>
    <body>
        <a href="dropRecord.php">Drop options</a>
        <h1>Drop Course</h1>
        <hr />
        <form method="post" action="dropCourse.php">
            <br>
            <label>Enter the course ID to be dropped: </label>
            <input type="text" name="courseID" placeholder="1045.." /><br>
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

        $course_id = filter_var($_POST["courseID"], FILTER_SANITIZE_STRING);

        $conn = mysqli_connect($host, $user, $pass, $db);
        
        if (!$conn) {
            die("Connection Unestablished: " . mysqli_connect_error());
        }
        
        if($course_id==''){
	       echo"Enter a valid CourseID";
        }
        $query = 'SELECT * FROM Course WHERE CourseID = "'.$course_id.'"';
        
        $result = mysqli_query($conn, $query);
        
        if($result){
            if(mysqli_num_rows($result) > 0){ 
                $sql = 'DELETE FROM Course WHERE CourseID = '.$course_id;
            
                if(mysqli_query($conn, $sql)){
                    echo "Record: <b>".$course_id."</b> was dropped successfully";
                }
                else {
                    echo "Error!! ".mysqli_error($conn);
                }
            }
            else {
                echo "Error!! user <b>(".$course_id.")</b> does NOT exist!!";
            }
        }
    mysqli_close($conn);
    }
?>