<?php
session_start();
$val = $_POST["id"];
$_SESSION["product"][$val]["item"] = $_POST["item"];
$_SESSION["product"][$val]["amount"] = $_POST["amount"];
?>
<!-- Update File  -->