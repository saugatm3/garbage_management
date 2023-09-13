<?php
include 'connection.php';

session_start();

$id = $_SESSION['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
// $email = $_SESSION['hemail'];

 $address = $_POST['address'];
 $city = $_POST['city'];
 $type = $_POST['comp-type'];
 $desc = $_POST['desc'];

 echo $address;

 if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./public_complain_image/" . $filename;
 
    // Get all the submitted data from the form
   $sql = "INSERT INTO public_complaint(id,comp_type,c_phone,comp_sts,comp_desc,c_img,c_address,c_city,c_date)VALUES($id,'$type','$phone','open','$desc','$filename','$address','$city',
   current_timestamp())";
 
    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header('Location: public.php');
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>