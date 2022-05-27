<?php
session_start();

require_once "config.php";
$email =  $_POST['email'];
$select = mysqli_query($con, "SELECT * FROM account WHERE email = '$email'");
if (mysqli_num_rows($select) > 0) {
    $user = mysqli_fetch_assoc($select);
    $name = strtoupper($user['fname']);
} else {
?>
    <script>
        alert('Incorrect email');
        window.location.replace('login.php');
    </script>

<?php
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

        a {
            text-decoration: none;
            color: Black;
        }

        .link {
            color: denger;
        }

        .footer {
            background-color: Dodgerblue;
            padding: 15px;
        }

        .footer a {
            color: white;
        }

        .box {

            display: flex;
            justify-content: space-between;
        }

        .field {
            border-radius: 20px;
            border: solid grey 2px;
            width: 50%;
            margin-left: 170px;
        }
    </style>
</head>

<body>




    <!-- <h1 class="text-primary">Welcome
<i class="fa fa-home" aria-hidden="true"></i></h1> -->
    <header class="text-white p-1 text-center" style="background-color:tomato;">
        <h5>assignmemt</h5>
    </header>

    <div class="d-flex justify-content-center align-items-center" style="height:80vh">
        <!-- Form Division with Border -->
        <div class="border px-4 pt-4 position-relative text-center w-50">
            <!-- Place form in center -->
            <i class="fa fa-user-circle-o text-info" aria-hidden="true" style="font-size:50px;position:absolute;top:-30px"></i>
            <br><br>
            <h6>Hi <?php echo $name; ?>!</h6><br><br>

            <div class="field"><b><?php echo $email; ?><b></div><br><br>

            <form action="password_verify.php" method="post">

                <div class="row">
                    <div class="col">
                        <div class="position-relative">
                            <input type="password" name="password" class="form-control ps-4" placeholder="choose-password">
                            <input type="hidden" name="email" value="<?php echo $email; ?>">
                            <i class="fa fa-key text-info position-absolute" aria-hidden="true" style="top: 10px; left: 5px"></i>

                            <i class="fa fa-eye text-info position-absolute" id="togglePassword" style="top: 10px; Right: 5px"></i>

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

            </form>


            <div class="link">
                <p style="color:Red;"><b><a href="#" style="color:Red; align-text:right;">Forget password ?<b></p></a>
                <p>
            </div>

        </div>
    </div>
    <footer class="footer">
        <div class="box">
            <a href="">
                <div>About uS</div>
            </a>
            <a href="">
                <div>Advertisement</div>
            </a>

            <a href="">
                <div>Kigali-Rwanda</div>
            </a>

            <a href="">
                <div>How search work</div>
            </a>
            <a href="">
                <div>Privacy</div>
            </a>
        </div>
    </footer>
</body>

</html>