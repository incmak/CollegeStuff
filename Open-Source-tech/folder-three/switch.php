<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<!-- Omit the code above -->

<?php 

//switch statements using php

$x = 60 ;

switch($x) {
    case $x>60 &&    $x <=70:
        echo "your guess is in betweeen";
        break;
    case 70-80:
        echo "Guess is high";
        break;
    case 60:
        echo "cool";
        break;
    default:
        echo "noooo";
}

?>