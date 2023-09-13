<?php
session_start();
include 'connection.php';

$sql1="select count(*) as total from public_work";
$result1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_assoc($result1);
$t1=$data1['total'];

$sql2="select count(*) as total from health_care_work";
$result2=mysqli_query($conn,$sql2);
$data2=mysqli_fetch_assoc($result2);
$t2=$data2['total'];

$sql3="select count(*) as total from public_complaint";
$result3=mysqli_query($conn,$sql3);
$data3=mysqli_fetch_assoc($result3);
$t3=$data3['total'];

$sql4="select count(*) as total from ppp_work_update";
$result4=mysqli_query($conn,$sql4);
$data4=mysqli_fetch_assoc($result4);
$t4=$data4['total'];

$total = $t1+$t2+$t3+$t4;

//completed work calculation

$sql11="select count(*) as total from public_work where status='Approved'";
$result11=mysqli_query($conn,$sql11);
$data11=mysqli_fetch_assoc($result11);
$t11=$data11['total'];

$sql21="select count(*) as total from health_care_work where w_status='Approved'";
$result21=mysqli_query($conn,$sql21);
$data21=mysqli_fetch_assoc($result21);
$t21=$data21['total'];

$sql31="select count(*) as total from public_complaint where comp_sts='open'";
$result31=mysqli_query($conn,$sql31);
$data31=mysqli_fetch_assoc($result31);
$t31=$data31['total'];

$sql41="select count(*) as total from ppp_work_update where status='Approved'";
$result41=mysqli_query($conn,$sql41);
$data41=mysqli_fetch_assoc($result41);
$t41=$data41['total'];

$total1 = $t11+$t21+$t31+$t41;

//pending work

$sql111="select count(*) as total from public_work where status='pending'";
$result111=mysqli_query($conn,$sql111);
$data111=mysqli_fetch_assoc($result111);
$t111=$data111['total'];

$sql212="select count(*) as total from health_care_work where w_status='pending'";
$result212=mysqli_query($conn,$sql212);
$data212=mysqli_fetch_assoc($result212);
$t212=$data212['total'];

$sql313="select count(*) as total from public_complaint where comp_sts='pending'";
$result313=mysqli_query($conn,$sql313);
$data313=mysqli_fetch_assoc($result313);
$t313=$data313['total'];

$sql414="select count(*) as total from ppp_work_update where status='pending'";
$result414=mysqli_query($conn,$sql414);
$data414=mysqli_fetch_assoc($result414);
$t414=$data414['total'];

$total12 = $t111+$t212+$t313+$t414;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Officer Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
      .a1{
        text-decoration:none;
        color:white;
      }
    </style>
</head>

<body>
    <div class="container">
     <div class="text-center">
        <h1>OFFICER PAGE</h1><hr>
      </div>
     
      <div> <button type="button" class="btn btn-danger "><a class="a1" href="log-out.php">Logout</a></button>
      </div>
      <div> <button type="button" class="btn btn-danger mt-2 "><a class="a1" href="../Drainclean_table.php">View Drain Clean Request</a></button>
      </div><br>
      <div class="row">
        <div class="col-md-4" style=" height:200px;width:150px;float:right;"><img src="..\profile-image\2141013024.jpg" alt="" height="100%" width="100%"></div>
        
       <div class="col-md-4"> <p><strong>Name: </strong><span><?php echo $_SESSION['ofname'] ?></span></p>
        <p><strong>Email: </strong><span><?php echo $_SESSION['email'] ?></span></p>
        <p><strong>DOB: </strong><span><?php echo $_SESSION['dob'] ?></span></p>
        <p><strong>Department: </strong><span><?php echo $_SESSION['dept'] ?></span></p>
        <p><strong>phone: </strong><span><?php echo $_SESSION['phone'] ?></span></p></div>
        <div class="container col-md-4" style="float:right;">
        <h1>WORK BALANCE PROGRESS</h1>
        <label>Total Work: <span><?php echo $total ?></span></label>
          <div class="progress">
          <div class="progress-bar progress-bar-animated progress-bar-striped" style="width:<?php echo $total ?>"><?php echo $total ?></div>
          </div><br>
          <label>completed Work: <span><?php echo $total1 ?></span></label>
          <div class="progress">
          <div class="progress-bar progress-bar-animated progress-bar-striped bg-success" style="width:<?php echo $total1 ?>"><?php echo $total1 ?></div>
          </div><br>
          <label>pending Work: <span><?php echo $total12 ?></span></label>
          <div class="progress">
          <div class="progress-bar progress-bar-animated progress-bar-striped bg-danger" style="width:<?php echo $total12 ?>"><?php echo $total12 ?></div>
          </div>
          </div> 
      
    </div>
       
 </div>
<br>
<hr>

</div>
<div class="container text-center">
    <div class="row ">
      <div class="col-md-6" ><a href="Public_Work_page.php" class="btn btn-info">Public work</a></div>
      <div class="col-md-6"><a href="employee_work_page.php" class="btn btn-danger">Employee work</a></div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col-md-6"><a href="pppworktable_for_offocer.php" class="btn btn-info">PPP work</a></div>
      <div class="col-md-6"><a href="health_care_data_for_officer.php" class="btn btn-danger">Health Data</a></div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6"><a href="public_complaint.php" class="btn btn-info">public complaint</a></div>
        <div class="col-md-6"><button class="btn btn-danger">Government message</button></div>
      </div>
    <hr>
  </div>



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                    crossorigin="anonymous"></script>
</body>

</html>