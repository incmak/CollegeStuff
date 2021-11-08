<?php
include 'connection.php';
if (!$con) die("connection NOT MADE");
$query = "select * from users";
$result = mysqli_query($con,$query);
echo "<table border = 1px>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Country</th>
        <th>Edit</th>
        </tr>
";

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $name = $row['name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $country = $row['country'];
    echo"<tr>" 
    ."<th>". $id."</th>" 
    ."<th>". $name."</th>" 
    ."<th>". $phone."</th>" 
    ."<th>". $email."</th>" 
    ."<th>". $country."</th>"
    ."<th>". "<a href='edit_user.php?id=$id'>Edit</a>"."</th>"
    ."</tr>";
}
echo "</table>";
?>