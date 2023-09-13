<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "UPDATE public_work SET status='Not Approved' WHERE wid=$id";

$result = mysqli_query($conn,$sql);

header('Location:employee_work_page.php');
?>