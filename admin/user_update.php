<?php
include "connection.php";

if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        date_default_timezone_set('Asia/Phnom_Penh');
        $created = date('Y-m-d H:i:s', time());

        $update_user = "UPDATE tbl_user SET username='$username', email='$email', password ='$password', created_date='$created' WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $update_user);
        if (!$result) {
            die("Can not update!" . mysqli_error($conn));
        } else {
            $meg = "Record update successfully!";
            header("Location:user_view.php?error=" . urlencode($meg));
            exit();

        }
    }
}