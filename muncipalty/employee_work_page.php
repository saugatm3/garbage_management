<?php
include 'connection.php';
session_start();

// $id = $_SESSION['worker_id'];

$sql="SELECT*FROM public_work,worker_work WHERE public_work.wid=worker_work.wid";

$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="text-center">
        <h1>Worker Page</h1>
      </div>
      <table class="table">
        <thead>
            <tr>
                <th scope="col">WORK ADDRESS</th>
                <th scope="col">Image</th>
                <th scope="col">Location</th>
                <th scope="col"></th>
                <th scope="col">Status</th>v
            </tr> 
        </thead>
        <tbody>
        <?php
               while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td scope="row"><?php echo $row['address']; ?></td>
                <td><a type="button" href="../employee-clean-image/<?php echo $row['image'] ?>" class="btn btn-primary">View</a></td>
                <td><a type="button" href="../muncipalty/maps_plot.php?id=<?php echo $row['wid']?>" class="btn btn-primary">Get</a></td>
                
                <td><div class="btn-group" role="group" aria-label="Basic example">
                <div class="form-group">
                    <a type="sumbit" href="employee_work_check.php?id=<?php echo $row['wid'];?>" class="btn btn-success" name="upload">Approved</a></div>

                    <a type="sumbit" href="worker_work_not_app.php?id=<?php echo $row['wid'];?>" class="btn btn-danger" name="upload">NOT Approved</a></div>
                </td>
                <th scope="row"><?php echo $row['status']; ?></th>
            </tr>
            <?php
               }
            ?>
               </tbody>
               </table>
     
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>