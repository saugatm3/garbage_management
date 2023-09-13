<?php
include 'connection.php';
session_start();
$id = $_SESSION['worker_id'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <div class="container">
        <div class="text-center">
           <h1>WORKER PROFILE</h1><hr>
         </div>
        
         <div> <a type="button" href="logout.php" class="btn btn-danger">Logout</a>
         </div><br>
         <div class="row">
           <div class="col-md-4" style="height:200px;width:150px;border:2px solid black;float:right;"><img src="../profile-image/<?php echo $_SESSION['wor_dp'];?>" alt="" srcset="" height="100%" width="100%"></div>
           
          <div class="col-md-4"> <p>Name:<span><?php echo $_SESSION['worker_name']; ?></span></p>
            <p>Phone:<span><?php echo $_SESSION['wor_phone']; ?></span></p>
           <p>Gender:<span><?php echo $_SESSION['wor_gender']; ?></span></p>
           <p>DOB:<span><?php echo $_SESSION['worker_name']; ?></span></p>
           <p>Department:<span><?php echo $_SESSION['wor_dept']; ?></span></p>
           <p></p></div>
           <div class="container col-md-4" style="float:right;">
               <div> <button type="button" class="btn btn-danger ">Upload Work</button>
               <canvas id="myChartBar" style="width: 55%; max-width: 800px;"></canvas>
   
               <div class="container spacing">
                   <script>
                       var xValues = ["Total Work", "Pending", "Completed"];
                       var yValues = [45, 56, 28];
                       var barColors = [
                           "#b91d47",
                           "#FF0000",
                           "#008000"
                       ];
                       new Chart("myChartBar", {
                           type: "bar",
                           data: {
                               labels: xValues,
                               datasets: [{
                                   backgroundColor: barColors,
                                   data: yValues
                               }]
                           },
                           options: {
                               legend: { display: false },
                               title: {
                                   display: true,
                                   text: "Daily reports"
                               }
                           }
                       });
       
                   </script>
               </div>
             </div> 
         
       </div>
       </div>
       <div> <a href="employee_page_table.php" type="button" class="btn btn-danger ">View All Work</a>  
    </div>
   <br>
   <hr>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script> 
</body>
</html>