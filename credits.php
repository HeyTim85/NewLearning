<?php

$course1 = ucwords("advanced Web Design");
$course2 = ucwords("Database Management");
$course3 = ucwords("Strategic Management");




$courseCredit1 = 3;
$courseCredit2 = 3;
$courseCredit3 = 3;

$totalCredits = ($courseCredit1 += $courseCredit2 += $courseCredit3);



echo "I am taking " . $totalCredits . " credits this semester. The courses I am taking now are:" . "<br>" .
        $course1 . "<br>" . $course2 . "<br>" . $course3;


//
//        I am taking 9 credit hours this semester. The courses I am taking now are:
//Advanced Web Development
//Introduction to .NET Development Using C#
//Information Systems With Business Intelligence

?>