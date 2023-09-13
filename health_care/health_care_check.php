<?php
include 'connection.php';

$unique_id = $_POST['unique_id'];
$password = $_POST['password'];

$sql = "SELECT*FROM health_care_data where hid = '$unique_id'and hpassword = '$password'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result); 

$row = mysqli_fetch_assoc($result);

// echo $row['ofname'];


if($count == 1){  
    session_start();
    $_SESSION['hid'] = $row['hid'];
    $_SESSION['hname'] = $row['hname'];
    // $_SESSION['lname'] = $row['lname'];
    $_SESSION['hemail'] = $row['hemail'];
    $_SESSION['hphone'] = $row['hphone'];
    $_SESSION['hgender'] = $row['hgender'];
    // $_SESSION['dob'] = $row['dob'];
    $_SESSION['hdp'] = $row['hdp'];
    $_SESSION['hdept'] = $row['hdept'];
    header('Location: Healthcare_profile.php');  
    echo "<h1> Login successfull</h1>";
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}  

?>