<?php
session_start();
include 'connection.php'

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Clean Odisha</title>
    <style>
        .c{
            margin-top:1%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .c1{
          text-decoration:none;
          margin-left:1%;
          background-color:#0d6efd;
          color:white;
        }
        .cu1{
          margin-left: 1%;
          padding: 20px;
        }
        .cn2{
          color: white;
             text-decoration: none;
        }
        .cn2:hover{
          
          color: white;
        }
        @media screen and (max-width: 572px){
          .c{
            display:flex;
            flex-direction:column;
          }
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2 c1" type="button"><a class="cn2" href="upload.php">UPLOAD A PROFILE PICTURE</a></button>
    <button class="btn btn-sm btn-outline-secondary c1" type="button"><a class="cn2" href="send.php">Log Out</a></button>
    <button class="btn btn-sm btn-outline-secondary c1" type="button"><a class="cn2" href="public_complaint.php">write a Complaint</a></button>
    <a class="btn btn-sm btn-outline-secondary c1" href="public_work_page_for_p.php">View all Clean request</a>
    <a class="btn btn-sm btn-outline-secondary c1" href="public_complaint_page_for_p.php">View all complaint status</a>
  </form>
</nav>
    <div class="container c">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src=".\profile-image\<?php echo $_SESSION['image']?>" class="img-fluid rounded-start" alt="UPLOAD IMAGE">
      
    </div>
    <div class="col-md-8">
      <div class="card-body">
        
        <h5 class="card-title"><strong>FName:</strong> <?php echo $_SESSION['fname']?></h5>
        <h5 class="card-title"><strong>LName:</Strong> <?php echo $_SESSION['lname']?></h5>
        <h5 class="card-text"><strong>Email:</strong> <?php echo $_SESSION['email']?></h5>
        <h5 class="card-text"><strong>Phone:</strong> <?php echo $_SESSION['phone']?></h5>
        <h5 class="card-text"><strong>Gender:</strong> <?php echo $_SESSION['gender']?></h5>
        <h5 class="card-text"><strong>Dob:</strong> <?php echo $_SESSION['dob']?></h5>
      </div>
    </div>
  </div>
</div>
<div class="card cu1" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">TOTAL WORK COMPLETED</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <h1>6</h1>
  </div>
</div>
<div class="card cu1" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">TOTAL WORK PENDING</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <h1>1</h1>
  </div>
</div>
    </div>

  <div class="container">
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">REQUEST FOR GARBAGE CLEANING</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="public-upload-garbage-image.php" class="btn btn-primary">MAKE A REQUEST</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">REQUEST FOR PERSONAL CLEANING</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="PersonalCleanForm.php" class="btn btn-primary">MAKE A REQUEST</a>
      </div>
    </div>
  </div>
</div>
      </div>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>