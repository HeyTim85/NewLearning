<?php

//    function longdate($timestamp)
//    {
//        $temp = date("1 F jS Y");
//        return "The date is $temp";
//        
//    }
//    echo longdate (time());//Once outside the function you cannot access $temp

//function test()
//{
//    static $count=0;
//    echo $count;
//    $count++;
//}
//test();  
//test();  
//test();  
//test();  


//global variable
//$GLOBALS['x'] = 75;
//$GLOBALS['y'] = 25;
//
//function addition()
//{
//    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
//}
//
//addition();
// echo $GLOBALS['z'];


//
//echo $_SERVER['PHP_SELF'];
//echo $_SERVER['SERVER_NAME'];
//echo $_SERVER['HTTP_HOST'];

//ECHO $_SERVER['HTTP_REFERER'];

//ECHO $_SERVER['HTTP_USER_AGENT'];




<!DOCTYPE HTML>
<HTML> 
    <head>
        <title>title</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              Name: <iput type-"text" name="fname">
                    <input typ="submit">
$name = $_POST['fname'];
if(empty($name))
        {
            echo "Name is empty";
        }
echo $name;
?>
    </body>


</HTML>