<?php
$postData = file_get_contents('php://input');
$data = json_decode($postData, true);




$servername = "localhost";
$username = "p-132_theablkz";
$password = "xtns,kznm[jxtim&";
$dbname = "p-132387_user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name, phone, iin, email, city)
VALUES ('{$data['name']}','{$data['phone']}','{$data['iin']}','{$data['email']}','{$data['city']}')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully {$data[name]}";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
