<?php
    //open connection to mysql db
   
include_once 'db.php';


    //fetch table rows from mysql db
    $sql = "select * from adduser";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
?>
