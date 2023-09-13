<?php
 include 'connection.php';     
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
  
    
    // $username = $_POST["username"]; 
    // $password = $_POST["password"]; 
    // $cpassword = $_POST["cpassword"];

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phone = $_POST['phone'];
    // $date = date('m/d/Y h:i:s a', time());
    //$mysqltime = date("Y-m-d H:i:s");

    // echo $fname;
    // echo $lname;
    // echo $dob;
    // echo $gender;
    // echo $email;
    // echo $password;
    // echo $cpassword;
    // echo $phone;
    // echo $date;
    
    // File upload path
            
    
    $sql = "Select * from public_data where email='$email'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
            $sql = "INSERT INTO public_data (fname,lname,dob,gender,email,phone,password,sig_in_dt)VALUES('$fname','$lname','$dob','$gender','$email',$phone,'$password',current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="email already exists"; 
   } 
    
}//end if   
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Clean Odisha</title>
    <style>
        body{
            background-image: url("https://img.freepik.com/free-vector/rubbish-street-scene_1308-40499.jpg?w=1060&t=st=1669403277~exp=1669403877~hmac=b8ab1c9f9524bb00fa89ac7670d6660fc509347facc72fc7e6cfab18180c2afe");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .c{
            background-color: rgba(0, 0, 0, 0.3);
        }
      
    </style>
  </head>
  <body>
  <?php
    
    if($showAlert) {
    
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can <a href="public-login.php">login</a>. 
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </div> '; 
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     }
   
?>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5 c">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                  <form action="public-sign-up.php" method="post">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                            <label class="form-label" for="firstName">First Name</label>
                          <input type="text" id="firstName" class="form-control form-control-lg" name="firstname" Required />
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                        <label class="form-label" for="lastName">Last Name</label>
                          <input type="text" id="lastName" class="form-control form-control-lg" name="lastname" Required/>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline datepicker w-100">
                            <label for="birthdayDate" class="form-label">DATE OF BIRTH</label>
                          <input type="text" class="form-control form-control-lg" id="dob" name="dob"  placeholder="YYYY-MM-DD" Required>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
                      <div class="form-outline">
                            <label class="form-label" for="gender">Gender</label>
                            <select class="form-select" aria-label="Default select example" name="gender" Required>
                            <option selected>Open this select menu</option>
                                   <option value="M">M</option>
                                   <option value="F">F</option>
                                   <option value="O">O</option>
                            </select>
                        </div>
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                            <label class="form-label" for="emailAddress">Email</label>
                          <input type="email" id="emailAddress" class="form-control form-control-lg" name="email" Required />
                        </div>
                        <div class="form-outline">
                            <label class="form-label" for="emailAddress">Password</label>
                          <input type="password" id="password" class="form-control form-control-lg" name="password" Required/>
                        </div>
                        <div class="form-outline">
                            <label class="form-label" for="emailAddress">confirm password</label>
                          <input type="password" id="confirmpassword" class="form-control form-control-lg" name="cpassword" Required />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                          <input type="number" id="phoneNumber" class="form-control form-control-lg" name="phone" Required />
                        </div>
                      </div>
                    </div>
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>