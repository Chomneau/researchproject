<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 1/5/17
 * Time: 2:14 PM
 */

include "connection.php";
    function SelectUsername(){
        $query = "SELECT * FROM tbl_user";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            $num_row = mysqli_num_rows($result);
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $num_row;
            }
        } else {
            echo "0 results";
    }
}//end function Select user

//count company
function selectCompany(){
        $com_sql = "SELECT about_id FROM tbl_about";
        $com_result = $conn->query($com_sql);

        if ($result->num_rows > 0) {
            $num_about = mysqli_num_rows($com_result);
        // output data of each row
            while($row = $com_result->fetch_assoc()) {
                $num_about;
            }
        } else {
            echo "0 results";
        }
    }
//count category
    function Selectpublication(){
        $pub_sql = "SELECT name FROM publication";
        $pub_result = $conn->query($pub_sql);

        if ($result->num_rows > 0) {
            $num_publication = mysqli_num_rows($pub_result);
        // output data of each row
            while($row = $pub_result->fetch_assoc()) {
                $num_publication;
            }
        } else {
            echo "0 results";
        }
    }//end function count category
$conn->close();

