<?php
include 'connection.php';
$id = $_GET['id'];
$query = "select * from users where id='$id'";
$result = mysqli_query($con,$query);
$run = mysqli_affected_rows($con);
if ($run > 0) {
$row = mysqli_fetch_array($result);
    echo $row['name'];
    $id = $row['id'];
    $name = $row['name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $country = $row['country'];
    echo "
    <form action='' method='POST'>
        ID <input type='text' name='n_id' value='$id' disabled>
        Name <input type='text' name='n_name' value='$name'>
        Email <input type='text' name='n_email' value='$email'>
        Phone <input type='text' name='n_phone' value='$phone'>
        <input type='submit' name='update' value='update'>
    </form>";

    if(isset($_POST['update'])) {
        $n_id = $_POST['n_id'];
        $n_name = $_POST['n_name'];
        $n_email = $_POST['n_email'];
        $n_phone = $_POST['n_phone'];
        $query = "update users set name='$n_name',email='$n_email',phone='$n_phone' where id='$id'";
        $result = mysqli_query($con,$query);
        if($result){
            echo 'updated';
        }
    }
     
}
else {
    echo "no such user found";
}
?>