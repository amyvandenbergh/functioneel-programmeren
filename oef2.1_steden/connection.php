<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "steden";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn -> connect_error){
die ("connection failed: ".$conn->connect_error);

    // execute given query
    $result = $conn->query($sql);

    // build data array
    $data = [];
    if ( $result->num_rows > 0 )
    {
        while( $row = $result->fetch_assoc() )
        {
            $data[] = $row;
        }
    }

    // close connection
    $conn->close();

    // return data array
    return $data;
}
?>
