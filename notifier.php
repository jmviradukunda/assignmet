<?php
require "config.php";
session_start();
$email = $_SESSION['receiver'];
// user data
$sql = "SELECT * FROM `account` WHERE `email` = '$email'";
$data = mysqli_query($con,$sql);
$user = mysqli_fetch_object($data);
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
            <h6>Congrats <?php echo strtoupper($user->fname); ?></h6><br><br>

            <div class="field"><b>
                    <?php echo $email; ?><b></div><br><br><br><br><br>
            <b>
                <h5>Help us in the journey of trust</h5>
            </b>
            <br>
            <p>check your above email to confirm the email ownership</p>
            <br>
            <a href="register.php" class="btn btn-secondary btn-sm">Back</a>
            <br><br>
        </div>
    </div>
    <footer class="footer fixed-bottom">
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