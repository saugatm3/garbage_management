<?php
include 'connection.php';
session_start();

$id = $_SESSION['ppp_id'];

$sql="SELECT*FROM ppp_work_update,ppp_data WHERE ppp_work_update.ppp_id=ppp_data.ppp_id";

$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PPP WORK TABLE</title>
</head>
<body>
    <div class ="container">
    <div class="text-center">
        <h1>PPP WORK TABLE</h1>
      </div>
      <hr>
      <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
                <th scope="col">Type</th>
                <th scope="col">Amount-Recycle</th>
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
                <td><a type="button" href="../ppp_work_image/<?php echo $row['work_image']; ?>" class="btn btn-primary">View</a></td>
                <th scope="row"><?php echo $row['date']; ?></th>
                <th scope="row"><?php echo $row['type']; ?></th>
                <th scope="row"><?php echo $row['amount_recycle']; ?></th>
                <th scope="row"><?php echo $row['status']; ?></th>
                <!-- <th scope="row"><div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success">Yes</button>
                    <button type="button" class="btn btn-danger">No</button>
                    
                  </div></th> -->
            </tr>
            <?php
               }
            ?>
     </thead>
   </table>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script> 
</body>
</html>