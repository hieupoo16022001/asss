<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_errno)die("Fatal Error");

$query = "SELECT * FROM acount";
$result = $conn->query($query);
if (!$result) die("Fatal Error");

$rows = $result->num_rows;
for ($j = 0; $j < $rows; ++$j){
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo 'WELCOME'.'<br>';
    echo 'Id: '     .$row['id'] .'<br>';
    echo 'Fullname: '      .$row['fullname'] .'<br>';
    echo 'Email '   .$row['email'] .'<br>';
    echo 'Username: '       .$row['username'] .'<br>';
    echo 'Password: '       .$row['password'] .'<br><br>';
}

$result->close();
$conn->close();
?>