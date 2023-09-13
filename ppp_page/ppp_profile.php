<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPP1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
        .m{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 23px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>PPP Page</h1>
        </div>
        <hr>
        <a class="btn btn-primary"href="ppp_log_out.php">Log Out</a>
        <a class="btn btn-primary"href="pppworktable.php">View all work</a>
        <div>
            <h1 class="m"><strong>Total Clean Request:</strong> 0</h1>
            <h1 class="m"><strong>Total Recycling:</strong> 0</h1>
            <h1 class="m"><strong>Total Request Pending:</strong> 0</h1>
            <h1 class="m"><strong>Total Request Completed:</strong> 0</h1>
        </div>
        <div>
            <div class="card" style="width: 18rem;">
                <img src="../profile-image/<?php echo $_SESSION['ppp_dp']; ?>" class="card-img-top"
                    alt="" height="100%" width="100%">

                <p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
                <!-- <p>D.O.B : 20/11/22</p> -->
                <p><strong>Gender :</strong> <?php echo $_SESSION['gender']; ?></p>
                <p><strong>Phone no. :</strong> <?php echo $_SESSION['phone']; ?></p>
                <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
                <!-- <p>Department : Frontend</p>
                <p>Industry : IT sector</p> -->
            </div>
        </div>

        <hr>
        <div class="container">
            <div class="text-center">
                <h1>Update Work</h1>
            </div>
            <hr>

            <form class="row g-3 needs-validation" action="ppp_work_check.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name" required>
                    <!-- <div class="valid-feedback">
                        Looks good!
                    </div> -->
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Type</label>
                    <input type="text" class="form-control" id="validationCustom02" name="type" required>
                    <!-- <div class="valid-feedback">
                        Looks good!
                    </div> -->
                </div>
                <div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Upload Image : </label>
                        <div class="form-group">
				       <input class="form-control" type="file" name="uploadfile" value="" />
			          </div>
                        <br>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Total Amount Recycle</label>
                        <input type="number" class="form-control" id="validationCustom01" name="amount" required>
                        <!-- <div class="valid-feedback">
                            Looks good!
                        </div> -->

                    </div>

                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="upload">Submit form</button>
                </div>
            </form>


            <hr>
            <div class="container">
                <div class="text-center">
                    <h1>Clean Request</h1>
                </div>
                <hr>



            </div>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Type</label>
                    <input type="text" class="form-control" id="validationCustom02" required>
                </div>
                <div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Upload Image : </label>
                        <button class="btn btn-primary" type="submit">Upload</button>
                        <br>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Contact:</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>





</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    
</body>
</html>