<?php
session_start();
$val = $_POST["id"];
unset($_SESSION["product"][$val]);
?>
<!-- Delete Expense file  -->