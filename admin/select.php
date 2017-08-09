<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 1/5/17
 * Time: 9:28 AM
 */

include 'connection.php';
$query = "SELECT * FROM category";
$result= mysqli_query($conn, $query);
if($result){
    while ($row = mysqli_fetch_assoc($result)) {
        echo "name : " . $row['name']."</br>";
    }
}else{
        die('can not select data'.mysqli_error($conn));
}
