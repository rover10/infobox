<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name, Roll FROM records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $data = "";
    $i =0;
    while($row = $result->fetch_assoc()) {
        //echo "Name: " . $row["Name"]. " - Roll" . $row["Roll"]. "<br>";
    if($i != 0)
        $data = $data . ",";    
    $data = $data .'{"name":' .'"' .$row["Name"] . '",' . '"roll":' .'"'. $row["Roll"] .'"}' ;
        $i++;
    }
    echo '{ "record":[' . $data . ']}';
} else {
    echo "0 results";
}
$conn->close();
?>