<?php
session_start();
require "config.php";
//receive data from a form
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `account` WHERE `email` = '$email'";
$exist = mysqli_query($con, $sql);
$data = mysqli_fetch_array($exist);

// unless verified
if (!$data['verified']) : ?>
    <script>
        alert('Account is not verified');
        window.location = 'login.php';
    </script>
<?php
    exit();
endif;

// if user verified
// chech password correction
if (password_verify($password, $data['password'])) {
    $_SESSION['user_id'] = $data['id'];
    header('location: dashboard/homepage.php');
} else {
?>

    <script>
        alert("Invalid password");
        window.location = 'login.php';
    </script>

<?php
}
