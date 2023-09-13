<?php
include 'connection.php';

// $sql = "SELECT*FROM public_work WHERE id='$id'";

// $result = mysqli_query($conn,$sql);

// $row = mysqli_fetch_assoc($result);
// $id = $_SESSION['id']; 

session_start();

$file = $_SESSION['file'];

// echo $file;

// $_SESSION['wid'] = $wid;

$sql = "SELECT * FROM public_work where image='$file'";
    
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$_SESSION['wid'] = $row['wid'];


header('Location:get-location.php');

?>