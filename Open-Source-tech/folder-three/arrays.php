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
<!-- OMIT the code above -->
<?php
    // one way of creating array using array() function
    $arr = array(1,2,3,4,5,6,7,8,9,10);
    // another way of creating array using square brackets []
    $arr2 = ["hell0","from","the","other","side"];
    //adding an elemetn to array using index
    $arr[10] = 11;
    //display array at index 10 in arr
    echo $arr[10]."<br>";
    //display array at index 5 in arr2
    echo $arr2[4]."<br>";
    //Display all the elements in an array using foreach loop 
    foreach($arr as $val) {
        echo $val;
    }
    echo "<br>";
    foreach($arr2 as $val) {
        echo $val;
    }

    //Associative array
    $arr3 = array(1=>"Mak", 2=>"Not", 3 => "user3");

    // Access the associate array using key(index) that we explicity defined
    echo "<br>";
    echo $arr3[2];
    //iterate over the associate array using foreach
    foreach($arr3 as $val => $values) {
        echo "<br>";
        echo $val."=>". $values;
    }

    //MultiDimensional Array
    $arr4 = array(
        array("id"=>1,
                "Name"=>"Mak",
                "class"=> 8),
        array("id"=>2,
                "Name"=>"user2",
                "class"=>9)
    );

    //Access elements of multidimensional array
    print_r($arr4);
?>