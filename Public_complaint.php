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
    .btn2 {
  background: #34bed9;
  background-image: -webkit-linear-gradient(top, #1596bae7, #1ababd);
  background-image: -moz-linear-gradient(top, #1596bae7, #1ababd);
  background-image: -ms-linear-gradient(top, #1596bae7, #1ababd);
  background-image: -o-linear-gradient(top, #1596bae7, #1ababd);
  background-image: linear-gradient(to bottom, #1596bae7, #1ababd);
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  padding: 0px 10px ;
  font-size: 22px;
  text-decoration: none;
}

.btn2:hover {
  background: #ff6200;
  background-image: -webkit-linear-gradient(top, #12b10ad9, #00ff99);
  background-image: -moz-linear-gradient(top, #c30e29, #ff6f00);
  background-image: -ms-linear-gradient(top, #c30e29, #ff6f00);
  background-image: -o-linear-gradient(top, #c30e29, #ff6f00);
  background-image: linear-gradient(to bottom, #c30e29, #ff6f00);
  text-decoration: none;
}
.x{
    border: 2px solid black;
    margin-top: 30px; 
    padding: 10px;
    border-radius: 10px;
}
.fgc{
    color:#0d6efd;
}
</style>
</head>
<body >
    <div class="container">
        <div class="text-center">
           <h1 class="fgc">PUBLIC COMPLAINT</h1><hr>
         </div>
    <div class="container x">
      

          
            <form class="row g-3 needs-validation" action="complaint_check.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label ">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name" required>
                   
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="validationCustom02" name = "phone" required>
                   
                </div>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Comp-type</label>
                    <input type="text" class="form-control" id="validationCustom01" name="comp-type" required>
                    
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationCustom02" name="city" required>
                    
                </div>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Address</label>
                    <input type="text" class="form-control" id="validationCustom01" name="address" required>
                   
                </div>
               
                    <div class="col-md-6 ">
                        <label for="validationCustom03" class="form-label">Upload Image : </label><br>
                        <div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
                        
                    </div>
                    
                    <div class="container " style="margin-top: 40px;">
                       
                        <form action="/action_page.php">
                          <div class="form-group">
                            <label for="comment">Complaint Description:</label>
                            <textarea  type="text" class="form-control" rows="5" id="comment" name="desc"></textarea>
                          </div>
                        
                      </div>
         
                  <br><br>

                <div class="col-12 text-center" >
                <div class="col-12">
                <button class="btn btn-primary" type="submit" name="upload">Submit form</button>
            </div>
                </div>
            </form>

<br>



</div>
<br>
<br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    
</body>
</html>