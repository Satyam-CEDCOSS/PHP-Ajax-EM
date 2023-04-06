<?php
    session_start();
    $_SESSION["expenses"]=0;
    $txt = ""; 
    foreach ($_SESSION["product"] as $key => $value) {
        $_SESSION["expenses"]+=$value["amount"];
        $txt .= "<tr><td>".$value["item"]."</td><td>".$value["amount"]."</td><td><button onclick='edit($key)'>Edit</button></td><td><button onclick='deletes($key)'>Delete</button></td></tr>";
    }
    echo $txt;
?>
