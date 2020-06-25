<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link rel="stylesheet" href="register.css" type="text/css">
</head>
<body>
<div class="box">
    <h1>Register</h1>
    <p>Email<input type="type" name="email"></p>
    <p>Password<input type="password" name="password"></p>
    <button type="submit" name="login" >Log in</button>
</div>
<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_errno)die("Fatal Error");


$test = 'false';
if (isset($_COOKIE['test'])) $test = $_COOKIE['test'];
setcookie("Fullname", "Username");

if (isset($_COOKIE['cookie'])){
    foreach ($_COOKIE['cookie'] as $fullname => $username){
        $fullname = htmlspecialchars($fullname);
        $username = htmlspecialchars($username);
        echo "$fullname : $username <br/>\n";
    }
}
?>
</body>
</html>
