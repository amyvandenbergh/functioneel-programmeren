<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "covid19";

$conn = new mysqli [ $servername,$username,$password,$dbname];
if ($conn -> connect_error ) (
    die ["connection failed". $conn-> connect_error];

)
    $sql = "select * from gemeente ";
$result= $conn -> query ($sql);

if ( $result -> num_rows > 0)
{
    while ( $row = $result -> fetch_assoc())
    {
        echo $row ["gemeente"]. "<br>";
    }
}