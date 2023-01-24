<?php
include 'dbConn.php';

$heading = 'Delete';

// This function will be used for view different Server information
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
};
//dd($_SERVER);
$employeeID = $_GET['id'];

$del_sql = "DELETE FROM employee WHERE id = '$employeeID' ";
$del_result = mysqli_query($conn, $del_sql);

//mysqli_affected_rows return 1 (true) if data deleted
if(mysqli_affected_rows($conn)){
    printf("Employee is deleted Successfully : %d\n", mysqli_affected_rows($conn));
}else{
    printf("Employee isn't exist: %d\n", mysqli_affected_rows($conn));
}



?>