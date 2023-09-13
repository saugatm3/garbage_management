<?php
include 'connection.php';
session_start();
$file = $_SESSION['file'];

$address=$_POST['Address'];
$city = $_POST['city'];
$unit = $_POST['unit'];



$sql = "UPDATE public_work SET address = '$address', UNIT = '$unit' , city = '$city', idate = current_timestamp() WHERE image = '$file'";

$result = mysqli_query($conn, $sql);


header('Location: public.php');

?>