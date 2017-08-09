<?php
include "connection.php";

if(isset($_GET['about'])){
    $about = $_GET['id'];

    if(isset($_POST['submit'])){
        $title_en = mysqli_real_escape_string($conn, $_POST['title_en']);
        $des_en = mysqli_real_escape_string($conn, $_POST['des_en']);
        $title_kh = mysqli_real_escape_string($conn, $_POST['title_kh']);
        $des_kh = mysqli_real_escape_string($conn, $_POST['des_kh']);

        $update_about= "UPDATE tbl_about SET about_title_en='$title_en', about_des_en='$des_en', about_title_kh ='$title_kh', about_des_en ='$des_kh' WHERE about_id = '$about'";
        $result = mysqli_query($conn, $update_about);
        if(!$result){
            die("Can not update!".mysqli_error($conn));
        }
        else{
            echo "Record update successfully!";
        }
    }
}