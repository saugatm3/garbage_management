<?php
session_start();

include 'connection.php';

$id = $_GET['id'];

$sql = "UPDATE health_care_work SET w_status = 'Approved' WHERE hwid=$id";

$result = mysqli_query($conn,$sql);

header('Location: health_care_data_for_officer.php');
?>