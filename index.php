<?php
include 'dbConn.php';

$heading = 'Home';

// This function will be used for view different Server information
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
};
//dd($_SERVER);

$card_array = [
    'success',
    'light',
    'secondary'
];


?>

<?php require 'views/index.view.php'; ?>

