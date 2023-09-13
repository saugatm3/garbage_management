<?php
include 'connection.php';

// $sql = "SELECT count(*) as 'total1' FROM public_work";
// $result1 = mysqli_query($conn,$sql);
// // $data1=mysql_fetch_assoc($result1);
// $t1 = $result1['total1'];

// echo $t1;

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

// echo $total

$sql11="select count(*) as total1 from public_work where status = 'Approved'";
$result11=mysqli_query($conn,$sql11);
$data11=mysqli_fetch_assoc($result11);
$t11=$data11['total1'];

$sql21="select count(*) as total1 from health_care_work where w_status = 'Approved' ";
$result21=mysqli_query($conn,$sql21);
$data21=mysqli_fetch_assoc($result21);
$t21=$data21['total1'];

$sql31="select count(*) as total1 from public_complaint where comp_sts = 'close'";
$result31=mysqli_query($conn,$sql31);
$data31=mysqli_fetch_assoc($result31);
$t31=$data31['total1'];

$sql41="select count(*) as total1 from ppp_work_update where status = 'Approved'";
$result41=mysqli_query($conn,$sql41);
$data41=mysqli_fetch_assoc($result41);
$t41=$data41['total1'];

$total1 = $t11+$t21+$t31+$t41;

//for count pending work

$sql12="select count(*) as total2 from public_work where status = 'Pending'";
$result12=mysqli_query($conn,$sql12);
$data12=mysqli_fetch_assoc($result12);
$t12=$data12['total2'];

$sql22="select count(*) as total2 from health_care_work where w_status = 'Pending' ";
$result22=mysqli_query($conn,$sql22);
$data22=mysqli_fetch_assoc($result22);
$t22=$data22['total2'];

$sql32="select count(*) as total2 from public_complaint where comp_sts = 'open'";
$result32=mysqli_query($conn,$sql32);
$data32=mysqli_fetch_assoc($result32);
$t32=$data32['total2'];

$sql42="select count(*) as total2 from ppp_work_update where status = 'Pending'";
$result42=mysqli_query($conn,$sql42);
$data42=mysqli_fetch_assoc($result42);
$t42=$data42['total2'];

$total2 = $t12+$t22+$t32+$t42;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <div class="container">
    <div class="text-center">
        <h1>GOVERNMENT PAGE</h1><hr>
    </div>
    <div> <a type="button" href="log_out.php" class="btn btn-danger">Logout</a>
    </div><br>
    <div></div> <span><h1>Total Work : <?php echo $total?></h1></span><br>
    <span><h1>Pending Work : 3</h1></span><br>
    <span><h1>Completed Work : 3</h1></span></div>

    <canvas id="myChartBar" style="width: 55%; max-width: 800px;"></canvas>


    <script>
        var xValues = ["Total Work", "Completed Work", "Pending Work"];
        var yValues = [<?php echo $total?>, <?php echo $total1?>, <?php echo $total2?>];
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
    
    <div class="d-grid gap-3">
        <div class="p-2 bg-light border"><a type="button" href="../muncipalty/public_Work_page.php" class="btn btn-warning">Public Garbage Request</a>
            <a type="button" href="../muncipalty/pppworktable_for_offocer.php" class="btn btn-warning">Private</a>
            <a type="button" href="../muncipalty/health_care_data_for_officer.php" class="btn btn-warning">Health Care</a>
            <br>  </div>
                <div class="p-2 bg-light border"><span>Total Employees:4</span>
                    <span>Total Officer:2</span><br>
                </div>
                <div class="p-2 bg-light border"><a type="button" class="btn btn-warning" href = "officer_table.php">Officer</a>
                    <a type="button" class="btn btn-warning" href="employee_table.php">Employee</a>
                    <!-- <div class="btn-group" role="group" aria-label="Basic example">
                        <a type="button" class="btn btn-primary">Suggest</a>
                        <a type="button" class="btn btn-primary">complaint</a>
                    </div> -->
                </div>

                </div>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                    crossorigin="anonymous"></script>
</body>

</html>