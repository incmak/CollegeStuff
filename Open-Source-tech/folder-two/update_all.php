<?php
include 'connection.php';
$query = "select * from users";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update All</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th></th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];
        $country = $row['country'];
            ?>
    <form action='' method='POST'>
        
            <tr>
                <td><input type='text' name='n_id' value='<?php echo $id ?>' readonly></td>
                <td> <input type='text' name='n_name' value='<?php echo $name ?>' ></td>
                <td> <input type='text' name='n_email' value='<?php echo $email ?>' ></td>
                <td> <input type='text' name='n_phone' value='<?php echo $phone ?>' ></td>
                <td><input type='submit' name='update' value='update'></td>
            </tr>
        </table>
    </form>
        <?php
        }
        if(isset($_POST['update'])) {
            $n_id = $_POST['n_id'];
            $n_name = $_POST['n_name'];
            $n_email = $_POST['n_email'];
            $n_phone = $_POST['n_phone'];
            $query = "update users set name='$n_name',email='$n_email',phone='$n_phone' where id='$n_id'";
            $result = mysqli_query($con,$query);
            if($result){
                echo "update succesful";
            }
        }
        ?>
        <a href="phpsqli1.php"> Go Back To all users </a>
</body>
</html>