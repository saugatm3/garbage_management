<?php
include 'connection.php';

$unique_id = $_POST['unique_id'];
$password = $_POST['password'];

$sql = "SELECT*FROM officer_data where ofid = '$unique_id'and password = '$password'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result); 

$row = mysqli_fetch_assoc($result);

echo $row['ofname'];


if($count == 1){  
    session_start();
    $_SESSION['ofd'] = $row['ofid'];
    $_SESSION['ofname'] = $row['ofname'];
    // $_SESSION['lname'] = $row['lname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['gender'] = $row['gender'];
    $_SESSION['dob'] = $row['dob'];
    $_SESSION['profile_img'] = $row['profile_img'];
    $_SESSION['dept'] = $row['dept'];
    header('Location: OFFICER_PAGE.php');  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}  

?>