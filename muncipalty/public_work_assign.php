<?php
session_start();
include 'connection.php';

$id1 = $_POST['wor_id'];

// echo $id1;

$wid = $_POST['wid'];

// echo $wid;

$sql2 = "INSERT INTO worker_work(wid,worker_id)VALUES($wid,$id1)";

$result2 = mysqli_query($conn,$sql2);

$sql3 = "UPDATE public_work SET employee=$id1 WHERE wid=$wid";

$result3 = mysqli_query($conn,$sql3);

header('Location: public_Work_page.php');



?>