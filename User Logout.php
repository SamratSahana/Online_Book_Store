<?php
// clear all the session variables and redirect to index
session_start();
session_unset();
session_write_close();
$url = "User Login 1.php";
header("Location: $url");
