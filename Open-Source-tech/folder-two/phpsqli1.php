<?php
include 'connection.php';
if (!$con) die("connection NOT MADE");
$query = "select * from users";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>User Details</title>
</head>
<body>
        <table border = 1px>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Country</th>
        <th>Edit</th>
        </tr>
<?php
while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $name = $row['name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $country = $row['country'];
    ?>
    <tr> 
    <td> <?php echo $id ?> </td> 
    <td> <?php echo $name ?> </td> 
    <td> <?php echo $phone ?></td> 
    <td> <?php echo $email ?></td> 
    <td> <?php echo $country ?></td>
    <td> <a href='edit_user.php?id=<?php echo $id ?>'>Edit</a></th>
    </tr>
    <?php
}
?>
<tr> <td> <a href='update_all.php'>Update All </a></td></tr>
</table>
</body>
</html>
