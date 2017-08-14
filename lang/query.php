<?php
/**
 * Created by PhpStorm.
 * User: chomneau
 * Date: 8/8/17
 * Time: 9:48 PM
 */
session_start();
include "../include/connection.php";
if (isset($_POST['langKhmer'])){
    //echo 'Hello Khmer';
    $dbSelect = "Select * From tbl_lang";
    $re = mysqli_query($conn, $dbSelect);
    if (!$re){
        die("can not select from database".mysqli_error($conn));
    }
    while ($row = mysqli_fetch_array($re)){
        $langKhmer = $row['khmer'];
        $langEnglish = $row['english'];
        $_SESSION['khmer'] = $langKhmer;
        $_SESSION['english'] = $langEnglish;
    }


} elseif (isset($_POST['langEnglish'])){
   // echo "Hello English";
    $_SESSION['english'] = $langEnglish;
}

if($_SESSION['khmer']){
    $query = "SELECT * from tbl_about";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("can not select from db".mysqli_error($conn));
    }
    while ($row = mysqli_fetch_array($result)){
        echo $row['kh_title'];
    }
}elseif ($_SESSION['english']){
    $query = "SELECT * from tbl_about";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("can not select from db".mysqli_error($conn));
    }
    while ($row = mysqli_fetch_array($result)){
        echo $row['en_title'];
    }
}

//while ($row = mysqli_fetch_array($result)){
//    if(isset($_GET['lang=en'])) {
//        echo $row['en_title'];
//    }
//    else
//    {
//        echo $row['kh_title'];
//    }
//}