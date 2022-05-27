<?php
session_start();
require_once "../config.php";
$id = $_SESSION['user_id'];
$data = mysqli_query($con, "SELECT * FROM `account` WHERE `id` = '$id'");
$user = mysqli_fetch_object($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body class="bg-light">
    <!-- header -->
    <header class="py-1" style="background-color: tomato;">
        <div class="d-flex justify-content-between container">
            <h6 class="text-white">
                Assignment
            </h6>
            <div>
                <div class="dropdown">
                    <span class="dropdown-toggle text-white" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../images/bg.jpg" class="rounded-circle border" height="30" width="30">
                        <?php echo $user->fname; ?>
                    </span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="mt-2">
        <div class="container">
            <div class="row">
                <div class="row">

                    <div class="col-md-8">
                        <div class="position-relative" style="height: 150px; background: url('../images/bg.jpg');background-size: cover; background-position:bottom">
                            <div class="position-absolute d-flex align-items-center" style="bottom: -30px;left:20px">
                                <img class="rounded-circle border border-2" src="../images/bg.jpg" height="100" width="100">
                                <h5 class="text-white ms-3"><?php echo $user->fname, " ", $user->lname; ?></h5>
                            </div>
                        </div>

                        <div class="pt-5 bg-white pb-3 ps-1">
                            <h5 class="text-dark fw-bold">Headline <i class="fa fa-pencil ms-3" aria-hidden="true"></i> </h5>
                            <span class="">Software engineer | data analyst</span>
                        </div>

                        <div class="bg-info py-1 px-2 border-bottom border-danger border-2">
                            <i class="fa fa-key text-white" aria-hidden="true"></i>
                            <span class="text-white fw-bold">Change password</span>
                        </div>



                    </div>




                    <div class="col-md-4">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum minima veniam iusto quod a. Impedit vel magnam cumque in. Deserunt dolorem doloremque explicabo labore quisquam laudantium iste! Fugit, aliquid non!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>

</html>