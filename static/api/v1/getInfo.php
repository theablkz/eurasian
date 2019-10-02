<?php
$servername = "localhost";
$username = "p-132_theablkz";
$password = "xtns,kznm[jxtim&";
$dbname = "p-132387_user";
$rows = $_GET['rows'] ?: 0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql  = 'SELECT `id`, `name`, `phone`, `iin`, `email`, 'city' FROM `users` LIMIT ' . $rows .', 10';

$count = 'SELECT COUNT(`id`) FROM `users`';
$countResult = $conn->query($count);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
    header('Content-type: application/json');
    echo json_encode(array('length' => $result->num_rows, 'result' => $arr, 'count' => $countResult));

} else {
    header('Content-type: application/json');
    echo json_encode(array('length' => '0'));
}
$conn->close();
?>
