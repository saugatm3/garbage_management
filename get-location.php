<?php
include 'connection.php';
session_start();

$file = $_SESSION['file'];

// echo $wid;

if (isset($_POST['submit'])) {
//   $name = $_POST['name'];
  $lat = $_POST['latitude'];
  $lon = $_POST['longitude'];
  // echo $lat;

// $lat = 20.8384994;
// $lon = 84.3187631;
  //echo "User Has submitted the form and entered this name : <b> $name </b>";
//   echo "<br>Latitude: $lat.";
//   echo "<br>Longitude: $lon.";

  $sql = "UPDATE public_work SET latitude = '$lat',longitude = '$lon' WHERE image='$file'";

  $result = mysqli_query($conn, $sql);

  header('Location: garbage-rqst.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
      var x = document.getElementById("demo");
      function getLocation()
      {
        if (navigator.geolocation)
        {
          navigator.geolocation.getCurrentPosition(bindPosition);
        }
        else {
          x.innerHTML = "Geolocation is not supported by this browser.";
        }
      }
      function bindPosition(position) {
        $("input[name='latitude']").val(position.coords.latitude);
        $("input[name='longitude']").val(position.coords.longitude);
      }
    </script>
  </head>
  <body onload="getLocation()">


    <form id="form1" name="form1" method="post" action="">
        <label>WE WANT YOUR CURRENT LOCATION</label>
        <input type='hidden' value='' name='latitude'/>
        <input type='hidden' value='' name='longitude'/>
        <input type="submit" name="submit" id="submit" value="Submit Info"/>
      </p>
    </form>
  </body>
</html>