<?php // TESTFILE.PHP


 $name = "Tim";
 $name_Letter_Array = str_split($name);
 $spell = "Tim is spelled as ";
         
$fh = fopen("result.txt",'w') or die("File doesn't exist");


fwrite($fh, print_r($name_Letter_Array, TRUE));


foreach($name_Letter_Array as $newLetter){
    $file = fopen("result.txt", "a")or die("Can't open file");
    fwrite($file, "$newLetter");
  
}

foreach($name_Letter_Array as $change){
    echo "<br> Decimal representation of $change is ".sprintf("%d",ord($change));
    echo "<br> Binary representation of $change is ".sprintf("%b",ord($change));
    $a =sprintf("%x", $change);
    echo "<br> Hexadecimal representation of $change is ".sprintf("%x",ord($change));
    echo "<br> Octal representation of $change is ".sprintf("%o",ord($change))."<br>";
    "<br>";
   
}
    
// timestamp

date_default_timezone_set('America/Indiana/Knox');

"<br>";
echo date("l F d Y -g:ia", time());
$date=date("l F d Y -g:ia", time());

fwrite($fh, $date);
fclose($fh);
?>

    
    
    