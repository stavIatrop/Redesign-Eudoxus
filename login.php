<?php
 
function OpenCon()
 {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "1234";
    $db = "eamDatabase";
    
    
    $conn = new mysqli($dbhost, $dbuser,$dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
 }
 
function CloseCon($conn)
{
    $conn -> close();
}

 function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

?>