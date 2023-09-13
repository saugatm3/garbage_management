<?php
include 'connection.php';

$sql = "SELECT*FROM health_care_work,health_care_data WHERE health_care_work.hid=health_care_data.hid";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body>
    <div class="container">
   
        <div class="text-center">
            <h1>Health Care Data</h1>
        </div>
        <hr>
        <table class="table">
            <thead>
                
                <tr>
                    <th scope="col">H.Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">description</th>
                    <th scope="col">w_image</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>
                    <!-- <th scope="col">Approval</th> -->

                </tr>
            </thead>
            <tbody>
            <?php
                 while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <th scope="row"><?php echo $row['name']; ?></th>
                    <th scope="row"><?php echo $row['phone']; ?></th>
                    <th scope="row"><?php echo $row['h_w_desc']; ?></th>
                    <th><a type="button" href="../health_care_image/<?php echo $row['w_image'];?>" class="btn btn-primary">View</a></th>
                    <th scope="row"><?php echo $row['w_address']; ?></th>
                    <th scope="row"><?php echo $row['w_city']; ?></th>
                    <th scope="row"><?php echo $row['w_type']; ?></th>
                    <th scope="row"><?php echo $row['w_status']; ?></th>
                    <th scope="row"><div class="btn-group" role="group" aria-label="Basic example">
                        <a type="button" class="btn btn-success" href="health_care_approved.php?id=<?php echo $row['hwid']?>">Yes</a>
                        <a type="button" class="btn btn-danger">No</a>
                      </div></th>
                </tr>
                <?php
                 }
                ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</html>