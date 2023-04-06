<?php
session_start();
print_r($_SESSION["salary"]-$_SESSION["expenses"]);
?>
