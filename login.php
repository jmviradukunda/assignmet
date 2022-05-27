<?php
require "config.php";
if(isset($_GET['v'])) {
    $token = $_GET['v'];
    $sql = "UPDATE `account` SET`verified`= 1 WHERE `verificationemail` = '$token'";
    mysqli_query($con,$sql);
}

?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
           
            <title>Document</title>
            <style>
          h4 {
              display: flex;
              flex-direction: row;
          }
            
          h4:before,
          h4:after {
              content: "";
              flex: 1 1;
              border-bottom: 2px solid #000;
              margin: auto;
              cursor: pointer;
          }
            
          img {
              height: 100px;
              width: 100px;
              border-radius: 50%;
          }
          a{
              text-decoration: none;
              color: Black;
          }
        .link{
            color: denger;
        }

        .footer{
            background-color: Dodgerblue;
            padding: 15px;
        }
        .footer a{
            color: white;
        }

        .box {
            
            display: flex;
            justify-content: space-between;
        }
 
    
         </style>
        </head>
        <body>
        <!-- <h1 class="text-primary">Welcome
        <i class="fa fa-home" aria-hidden="true"></i></h1> -->
        <header class="text-white p-1 text-center" style="background-color:tomato;">
        <h5>assignmemt</h5>
        </header>

        <div class="d-flex justify-content-center align-items-center" style="height:80vh;">
                <!-- Form Division with Border -->
        <div class="border px-4 pt-4 position-relative text-center w-50" >
            <!-- Place form in center -->
           

                <h3>Welcome back</h3><br><br>
                <h5>sign in</h5>
            <form action="insertDatalogin.php" method="post">
            
            <div class="row g-1">
            <div class="col" >
            <div class="position-relative">
                <input type="email" name="email" class="form-control mb-3 mt-3 ps-4" placeholder="Email">
                <i class="fa fa-envelope text-info position-absolute" aria-hidden="true" style="top: 10px; left: 5px"></i>
            </div>
            </div>
            </div>

            

            <div class="row">
            <div class="col">
            <div class="position-relative ps-4 mt-3 mb-3"> 
                <input type="submit" name="submit" class="btn btn-primary w-50" value="Next">
            </div>
            </div>
            </div>
            <h4>Or</h4>
            <div class="row">
                <div class="col">
                <div class="form-control g-1 bg-danger position-relative ps-1 mt-3 mb-3 " style="w-100">
            <i class="fa fa-google text-info position: absloute fa-lg" style="top: 10px; right:5px size: 50px" aria-hidden="true"></i>
            <span ><a href="#"><b>Continue with Google</b></a></span>
            </div>
            </div>
            </div>
            <div class="link">
              <a href="register.php"> <p style="color:blue;text-align:left;">Create account,</a><b></p></a><p>
            </div>
            </div>
             </div>
            </div>
 
            </form>

        </div>
        </div>
        <footer class="footer">
            <div class="box">
  <a href=""><div>About uS</div></a>
  <a href=""><div>Advertisement</div></a>

        <a href=""><div>Kigali-Rwanda</div></a>

  <a href=""><div>How search work</div></a>
  <a href=""><div>Privacy</div></a>
    </div>
            </footer>
        </body>
        </html>
