<?php

// echo, print, printf printf makes it easier to print out things.

//printf("My name is %s. I am %d years old, which is %x in hexadecimal, b in binary, %o in octal, %f in floating point",'Simon',22,22,22,22,22); //%s stands for string %d stands for decimal %x hexadecimal format
//
//printf("<span style='color:#%X%X%X'>Hello</span>",65,127,245);
//echo "<pre>";
//printf("The result is $%15f\n",123.42/12);
//printf("The result is $%'#15f\n",123.42/12);
//to specify how many decimal points after put $%15.2f\n


//echo "<pre>";
//$hexstring = sprintf("%X%X%X",65,127,245);
//echo $hexstring;

//
//echo time();
//echo time()+7*24*60*60;

//date_default_timezone_set('America/Chicago');
//echo date("l F jS, Y - g:ia");//on page 145


//echo checkdate(2,30,2010)?"Valid Date" : "Invalid date";

//echo file_exists("testfile.txt")?"File exists" : "File Doesn't exist";
//$file = fopen("testfile.txt",'a') or die("Failed");
//echo "File opened successfully";
//$text = "123";
//fwrite($file,$text) or die("Cannot write to a file");
//echo "file written successfully";
//pg 149-5

//$file = fopen("testfile.txt", 'r') or die("File cannot be opened");
//$text = fread($file,filesize("c:\\xampp\\hotdocs\\testfile.txt"));
//fclose($file);
//echo $text;

//copy("textfile.txt","testfile2.txt") or die("Cannot copy file");
//echo "Copy Successfully";

//rename("testfile2.txt","testfile2new.txt") or die(Cannot rename file");

//unlink("testfuke2bew,txt") ir due("Cannot delete file");
//echo "Delete successfully";
//
//$filepath = "C:\\xampp\\htdocs\\testfile.txt";
//$file = fopen($filepath, 'r+') or die("file cannot be opened");
//$updatedText = "NEW CONTENTS";
//fseek($file,0,SEEK_END);
//fwrite($file,$updatedText) or die("Cannot Update");
//echo "Update successfully";
//fclose($file);


//$file = fopen("testfile.txt",'r+') or die("Fail to open");
//$text = fgets($file);
//
//if(flock($file,LOCK_EX))
//{
//    
//    fseek($file,0,SEEK_END);
//    fwrite($file,"NEWText") or die("Cannot update");
//    
//}
//    fclose($file);
//echo "updated file successfully";    

if($_FILES)
{
    $name = $_FILES['filename']['name'];
//pg 157
echo "Upload image '$name' <br><img src='$name'>";
    
}

echo "</body>"

?>



<html>
    <head><title>PHP Form Upload</title></head>
    <body>
        <form method = 'post' action='ex8.php' enctype='multipart/form-data'>
            Select File: <input type='file' name='filename' size='10'>
                             
        </form>
        
    </body>
    
    
</html>