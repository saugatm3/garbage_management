<?php
include 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT*FROM public_data where email = '$email'and password = '$password'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result); 

$row = mysqli_fetch_assoc($result);


if($count == 1){  
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['gender'] = $row['gender'];
    $_SESSION['dob'] = $row['dob'];
    $_SESSION['image'] = $row['file_name'];
    header('Location: public.php');  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}  

?>