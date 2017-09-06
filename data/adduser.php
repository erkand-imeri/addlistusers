<?php
include_once 'db.php';


$sql="INSERT INTO adduser (name, province,telephone,postalcode,salary)
VALUES
('$_POST[addname]','$_POST[addprovince]','$_POST[telephone]','$_POST[postal]','$_POST[salary]')";
 
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 

unset($conn);




?>