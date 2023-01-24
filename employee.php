<?php
include 'dbConn.php';

$heading = 'Employee List';

// This function will be used for view different Server information
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
};
//dd($_SERVER);

//fetch employee data from database
$sql = 'SELECT e.id , e.name, e.age, e.phone, e.salary , d.dep_name, c.cityname FROM employee e 
INNER JOIN department d
ON e.department= d.dmid
INNER JOIN city c
ON e.city = c.cid
ORDER BY e.id ASC';

$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);

?>

<?php require 'views/employee.view.php'; ?>