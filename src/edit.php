<?php
session_start();
$val = $_POST["id"];
print_r(json_encode($_SESSION["product"][$val]))
?>
<!-- Edit File  -->