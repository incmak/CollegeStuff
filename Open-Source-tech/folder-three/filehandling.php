<?php 
//Multiple ways of handling files in php
$text = "Hello this a file <br> 2. Next line used ";
// file() open a file as an array
$filename = 'file1.txt';
$filearr = file($filename);
foreach($filearr as $f) {
    echo $f;
}
echo "<br>";
//readfile() opens and prints at the same time
readfile($filename);
echo "<br>";
//this gets the file contens in a string
$filestr = file_get_contents($filename);
echo $filestr;
echo "<br>";
//retruns if fileexists or not
if(file_exists($filename)){
    echo "yes";
}
else {
    echo "NO";
}

//fopen opens the file in write read or append mode
$file = fopen($filename,'a+');
//fread read the file contens
echo "<br>";
$fsize = filesize($filename);
echo fread($file,$fsize);

//fwrite writes the file
//fwrite($file, "$text");
//fclose closes the file

fclose($file);

?>