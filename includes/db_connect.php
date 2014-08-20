<?php
    $host="205.178.146.110 "; // Host name
    $username="crash2770"; // Mysql username
    $password="Eastbrook1"; // Mysql password
    $db_name="custom_cms"; // Database name
    $tbl_name="user1"; // Table name
    mysql_connect("$host", "$username", "$password")or die("cannot connect");
    mysql_select_db("$db_name")or die("cannot select DB");
?>  