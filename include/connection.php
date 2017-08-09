<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 12/17/16
 * Time: 6:48 AM
 */

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_research";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
    die("fail connection").mysqli_connect_errno();
}