<?php
include 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT*FROM worker_data where worker_id = '$email'and w_password = '$password'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result); 

$row = mysqli_fetch_assoc($result);


if($count == 1){  
    session_start();
    $_SESSION['worker_id'] = $row['worker_id'];
    $_SESSION['worker_name'] = $row['worker_name'];
    // $_SESSION['lname'] = $row['lname'];
    $_SESSION['wor_email'] = $row['wor_email'];
    $_SESSION['wor_phone'] = $row['wor_phone'];
    $_SESSION['wor_gender'] = $row['wor_gender'];
    $_SESSION['wor_dept'] = $row['wor_dept'];
    $_SESSION['wor_dp'] = $row['wor_dp'];
    $_SESSION['wor_address'] = $row['wor_address'];
    $_SESSION['wor_city'] = $row['wor_city'];
    header('Location: workerprofile.php');
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}  

?>