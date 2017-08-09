<?php
/**
 * Created by PhpStorm.
 * User: chomneau
 * Date: 8/8/17
 * Time: 9:48 PM
 */
session_start();
include "../include/connection.php";
$query = "SELECT * from tbl_about";
$result = mysqli_query($conn, $query);
if (!$result){
    die("can not select from db".mysqli_error($conn));
}
while ($row = mysqli_fetch_array($result)){
    if(isset($_GET['lang=en'])) {
        echo $row['en_title'];
    }
    else
    {
        echo $row['kh_title'];
    }
}