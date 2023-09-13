<?php
include 'connection.php';
$sql1 = "SELECT*FROM officer_data";
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
    <h2>Officers list</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>officer Name</th>
          <th>officer ID</th>
          <th>officer Email</th>
          <th>Gender</th>
          <th>Department</th>
          <th>Phone</th>
          <th>Dob</th>
        </tr>
      </thead>
      <tbody>
      <?php
                 while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <th scope="row"><?php echo $row['ofname']; ?></th>
                    <th scope="row"><?php echo $row['ofid']; ?></th>
                    <th scope="row"><?php echo $row['email']; ?></th>
                    <th scope="row"><?php echo $row['gender']; ?></th>
                    <th scope="row"><?php echo $row['dept']; ?></th>
                    <th scope="row"><?php echo $row['phone']; ?></th>
                    <th scope="row"><?php echo $row['dob']; ?></th>
                </tr>
                <?php
                 }
                ?>
      </tbody>
    </table>
  </div>
</body>
</html>
