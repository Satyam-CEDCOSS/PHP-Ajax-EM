<?php
session_start();
$amount = $_POST["amount"];
$_SESSION["salary"]+=$amount;
print_r($_SESSION["salary"]);
?>
<!-- Add Salary File  -->