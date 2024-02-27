<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "fpt-aptech";
$conn = mysqli_connect($server, $user, $pass, $database);
if ($conn)
{
    mysqli_query($conn,"set names 'utf-8'");
}
else
    echo "<br>Connect to db fail".mysqli_connect_error();
?>

