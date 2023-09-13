<?php
include 'connection.php';
session_start();
$sql1="select count(*) as total from health_care_work";
$result1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_assoc($result1);
$t1=$data1['total'];

$sql2="select count(*) as tota2 from health_care_work where w_status = 'Approved'";
$result2=mysqli_query($conn,$sql2);
$data2=mysqli_fetch_assoc($result2);
$t2=$data2['tota2'];

$sql3="select count(*) as tota2 from health_care_work where w_status = 'Approved'";
$result3=mysqli_query($conn,$sql3);
$data3=mysqli_fetch_assoc($result3);
$t3=$data3['tota3'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&family=Lobster&family=Oswald&family=Signika:wght@500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
        .cv{
            color:#dc3545;
            font-weight: 500;
            font-family: 'Signika', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
     <div class="text-center">
        <h1 class="cv">HEALTHCARE PROFILE</h1><hr>
      </div>
     
      <div> <a href="h_logout.php" type="button" class="btn btn-danger ">Logout</a>
      </div><br>
      <div class="row">
        <div class="col-md-4" style=" height:200px;width:150px;border:2px solid black;float:right;"><img src="../profile-image/<?php echo $_SESSION['hdp'] ?>" alt="" height="100%" width="100%"></div>
        
       <div class="col-md-4">  <p><strong style="color:#dc3545;">Name: </strong><span><?php
       echo $_SESSION['hname']; ?></span></p>
        <p><strong style="color:#dc3545;">Email: </strong><span><?php
       echo $_SESSION['hemail']; ?></span></p>
        <p><strong style="color:#dc3545;">phone: </strong><span><?php
       echo $_SESSION['hphone']; ?></span></p>
        <p><strong style="color:#dc3545;">Department: </strong><span><?php
       echo $_SESSION['hdept']; ?></span></p>
        <p><strong style="color:#dc3545;">Gender: </strong><span><?php
       echo $_SESSION['hgender']; ?></span></p></div>
        <div class="container col-md-4" style="float:right;">
            <div> <a href="Health_care_data_upload.php" type="button" class="btn btn-danger ">Upload Work</a>
            <canvas id="myChartBar" style="width: 55%; max-width: 800px;"></canvas>

            <div class="container spacing">
                <script>
                    var xValues = ["Total Work", "Approved Work", "Not Approved Work"];
                    var yValues = [<?php echo $t1 ?>, <?php echo $t2 ?>, <?php echo $t3 ?>];
                    var barColors = [
                        "#b91d47",
                        "#008000",
                        "#FF0000"
    
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
    <div> <a href="health_care_work_table.php" type="button" class="btn btn-danger ">View All Work</a>  
 </div>
<br>
<hr>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>