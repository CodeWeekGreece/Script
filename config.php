<?php

$server = "localhost";
$user = "root";
$pass = "classified"; // Data classified for security reasons
$database = "id17510115_userdata";

$conn = mysqli_connect($server, $user , $pass, $database);

if (!$conn) {
    die("<script>('Connection Failed.')</script>");
}

?>