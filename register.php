
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
            padding: 16px;
            
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
            <i class="fa fa-user-circle-o text-info" aria-hidden="true" style="font-size:50px;position:absolute;top:-30px"></i>

                <h6>I can't wait to create account</h6><br><br>
                
            <form action="insertData.php" method="post">
        <div class="row g-1">
            <div class="col">
            <div class="position-relative">
            <input type="text" name="fname" class="form-control ps-4" placeholder="F.Names" onkeypress="return /[a-z]/i.test(event.key)">
            <i class="fa fa-user text-info position-absolute" aria-hidden="true" style="top: 10px;left: 5px"></i>
            </div>
            </div>

            <div class="col">
            <div class="position-relative">
            <input type="text" name="lname" class="form-control ps-4" placeholder="L.Names" onkeypress="return /[a-z]/i.test(event.key)">
            <i class="fa fa-user text-info position-absolute" aria-hidden="true" style="top: 10px; left: 5px"></i>
            </div>
            </div>
            </div>
            
            <div class="row g-1">
            <div class="col" >
            <div class="position-relative">
                <input type="email" name="email" class="form-control mb-3 mt-3 ps-4" placeholder="Email" required>
                <i class="fa fa-envelope text-info position-absolute" aria-hidden="true" style="top: 10px; left: 5px"></i>
            </div>
            </div>
            </div>

            <div class="row">
            <div class="col">
            <div class="position-relative">
                <input type="password" name="password" class="form-control ps-4" placeholder="choose-password" required>
                <i class="fa fa-key text-info position-absolute" aria-hidden="true" style="top: 10px; left: 5px"></i>

                <i class="bi bi-eye-slash text-info position-absolute" aria-hidden="true" style="top: 10px; right:10px;"></i>
            
            </div>
            </div>
            </div>

            <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>

            <div class="row">
            <div class="col">
            <div class="position-relative ps-4 mt-3 mb-3"> 
                <input type="submit" name="submit" class="btn btn-primary w-50 round" value="Next" >
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
               <p style="color:Red;">Already have an account?, <b><a href="login.php"  style="color:Red;"> SIGN IN<b></p></a><p>
            </div>
            </div>
             </div>
            </div>
 
            </form>

        </div>
        </div>
        <footer class="footer">
            <div class="box p-4">
  <a href=""><div>About uS</div></a>
  <a href=""><div>Advertisement</div></a>

        <a href=""><div>Kigali-Rwanda</div></a>

  <a href=""><div>How search work</div></a>
  <a href=""><div>Privacy</div></a>
    </div>
            </footer>
    
        </body>
        </html>
