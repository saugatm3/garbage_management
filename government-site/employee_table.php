<?php
include 'connection.php';
$sql1 = "SELECT*FROM worker_data";
$result = mysqli_query($conn,$sql1);
// echo $result['worker_name'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee Table</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      margin: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Employee Table</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Employee Name</th>
          <th>Employee ID</th>
          <th>Employee Email</th>
          <th>Gender</th>
          <th>Department</th>
          <th>City</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
      <?php
                 while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <th scope="row"><?php echo $row['worker_name']; ?></th>
                    <th scope="row"><?php echo $row['worker_id']; ?></th>
                    <th scope="row"><?php echo $row['wor_email']; ?></th>
                    <th scope="row"><?php echo $row['wor_gender']; ?></th>
                    <th scope="row"><?php echo $row['wor_dept']; ?></th>
                    <th scope="row"><?php echo $row['wor_city']; ?></th>
                    <th scope="row"><?php echo $row['wor_address']; ?></th>
                </tr>
                <?php
                 }
                ?>
      </tbody>
    </table>
  </div>
</body>
</html>
