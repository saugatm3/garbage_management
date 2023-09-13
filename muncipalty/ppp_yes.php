<?php
include 'connection.php';

$work_id = $_GET['id'];

$sql = "UPDATE ppp_work_update SET status='Approved'";

$result = mysqli_query($conn,$sql);

header('Location: pppworktable_for_offocer.php');
?>