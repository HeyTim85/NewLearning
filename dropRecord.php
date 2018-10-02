<!DOCTYPE html>
<html>
    <head><title>Record Drop</title>
        <style>body{text-align: center;}select{width: 20%;}</style>
    </head>
    <body>
        <h1>Select from drop down menu</h1>
            <select id="redirectSelect">
                <option value="">-</option>
                <option value="dropCourse.php">Course</option>
                <option value="dropStudent.php">Student</option>
                <option value="dropEnrollment.php">Enrollment</option>
            </select>
        <script>
            var selected = document.getElementById('redirectSelect');
            
            selected.onchange = function(){
              var goto = this.value;
                window.location = goto;
            }
        </script>
    </body>
</html>