<?php
include 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT*FROM ppp_data where ppp_id = '$email'and password = '$password'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result); 

$row = mysqli_fetch_assoc($result);


if($count == 1){  
    session_start();
    $_SESSION['ppp_id'] = $row['ppp_id'];
    $_SESSION['name'] = $row['name'];
    // $_SESSION['lname'] = $row['lname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['gender'] = $row['gender'];
    // $_SESSION['dob'] = $row['dob'];
    $_SESSION['ppp_dp'] = $row['ppp_dp'];
    header('Location: ppp_profile.php');  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}  

?>