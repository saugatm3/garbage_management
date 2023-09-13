<?php
include 'connection.php';

$wid = $_GET['id'];

$sql = "SELECT*FROM public_work WHERE wid=$wid";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>location</title>
</head>
<body>
    <a class="btn btn-primary" href="https://maps.google.com/?q=<?php echo $row['latitude'] ?>,<?php echo $row['longitude'] ?>">View in google maps</a>
</body>
</html>