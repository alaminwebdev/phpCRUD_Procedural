<?php
include 'dbConn.php';
$heading = 'Add Employee';
?>

<?php
// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';
//echo $_SERVER["REQUEST_URI"];




//fetch department from database
$dep_sql = "SELECT * FROM department";
$dep_result = mysqli_query($conn, $dep_sql);
$dep_row = mysqli_num_rows($dep_result);

//fetch city from database
$city_sql = "SELECT * FROM city";
$city_result = mysqli_query($conn, $city_sql);
$city_row = mysqli_num_rows($city_result);

$msg = '';


// define variables and set to empty values
$name = $age = $phone = $salary = $department = $city = "";
$nameErr = $ageErr = $phoneErr = $salaryErr = $depErr = $cityErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_inputTxt($_POST["name"]);
    }

    $age = $_POST['age'];

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } else {
        $phone = test_inputTxt($_POST["phone"]);
    }

    $salary = $_POST["salary"];
    $department = $_POST["department"];
    $city = $_POST["city"];

    if (empty($name) || empty($age) || empty($phone) || empty($salary) || empty($department) || empty($city)) {
        $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> Error! Field Must not be empty</div>";
    } else {
        $insertSQL = "INSERT INTO employee (name, age, phone, salary, department, city)
        VALUES ('$name', $age, '$phone', $salary, $department, $city)";

        $insertResult = mysqli_query($conn, $insertSQL);
        if ($insertResult) {
            
            // 301 Moved Permanently
            header("Location: employee.php", true, 301);
            exit();
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
}
function test_inputTxt($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = ucwords($data);
    $data = htmlspecialchars($data);
    return $data;
}





// if (isset($_POST['submit'])) {
//     echo "<h2>Your Input:</h2>";
//     echo $name;
//     echo "<br>";
//     echo $age;
//     echo "<br>";
//     echo $phone;
//     echo "<br>";
//     echo $salary;
//     echo "<br>";
//     echo $department;
//     echo "<br>";
//     echo $city;
// }


// if(isset($_POST["submit"])){
//     echo $_SERVER["REQUEST_METHOD"] . "from submit";
// }elseif(isset($_POST["clsubmit"])){
//     echo $_SERVER["REQUEST_METHOD"] . "from clsubmit";
// }




?>
<?php require 'views/add.view.php' ?>
