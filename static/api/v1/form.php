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
    $to      = 'smartlead.tm@gmail.com';
    $subject = 'user registered';
    $message = "
    <html>
    <head>
      <title>Idengi новый клиент</title>
    </head>
    <body>
    <table>

        <tbody>
        <tr>

        <td>name</td>
        <td>city</td>
        <td>iin</td>
        <td>email</td>
        <td>phone</td>

        </tr>
        <tr>

        <td>{$data['name']}</td>
        <td>{$data['city']}</td>
        <td>{$data['iin'] }</td>
        <td>{$data['email']}</td>
        <td>{$data['phone']}</td>

        </tr>
        </tbody>
        </table>
    </body>
    </html>";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From: eubank@theablkz.kz';
    $headers[] ='Reply-To: eubank@theablkz.kz';
    $headers[] ='X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, implode("\r\n", $headers));

    echo "New record created successfully {$data['name']}";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
