<?php
include 'connection.php';
session_start();

$id =$_SESSION['ppp_id'];
$name=$_POST['name'];
$type=$_POST['type'];
$amount=$_POST['amount'];

echo $id;
echo $type;
echo $amount;

//  echo $id;

if (isset($_POST['upload'])) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../ppp_work_image/".$filename;
    echo $filename;
    
    //    $_SESSION['file'] = $filename;
    
    // Get all the submitted data from the form
    
    // Execute query
    $sql="INSERT INTO ppp_work_update(ppp_id,type,amount_recycle,status,work_image,date)VALUES($id,'$type',$amount,'pending','$filename',current_timestamp())";
    
    $result = mysqli_query($conn,$sql);


   // Now let's move the uploaded image into the folder: image
   if (move_uploaded_file($tempname,$folder)) {
       echo "<h3> Image uploaded successfully!</h3>";
       header('Location:ppp_profile.php');
   } else {
       echo "<h3>Failed to upload image!</h3>";
   }

}else{
    echo "not upload";
   }

?>
