<?php 

//$_SESSION["favcolor"] = "yellow";
//print_r($_SESSION);
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>