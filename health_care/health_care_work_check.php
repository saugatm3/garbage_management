<?php
include 'connection.php';

session_start();

$id = $_SESSION['hid'];
$name = $_SESSION['hname'];
$phone = $_SESSION['hphone'];
$email = $_SESSION['hemail'];

 $address = $_POST['address'];
 $city = $_POST['city'];
 $type = $_POST['type'];
 $desc = $_POST['desc'];

 echo $address;

 if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../health_care_image/" . $filename;
 
    // Get all the submitted data from the form
   $sql = "INSERT INTO health_care_work(hid,name,phone,email,h_w_desc,w_image,w_address,w_city,w_type,w_status)VALUES($id,'$name',$phone,'$email','$desc','$filename','$address','$city','$type','pending')";
 
    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header('Location: health_care_data_upload.php');
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>