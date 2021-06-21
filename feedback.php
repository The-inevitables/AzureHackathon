<?php

try {
    $conn = new PDO("sqlsrv:server = tcp:lifelineserver.database.windows.net,1433; Database = lifelinesqldb", "akhil", "Inevitables@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "akhil", "pwd" => "Inevitables@123", "Database" => "lifelinesqldb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:lifelineserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

$name =  $_POST['name'];
$email =  $_POST['email'];
$phone =  $_POST['phone']; 
$subject =  $_POST['subject'];
$message =  $_POST['message'];


$params = array($name,$email,$phone,$subject,$message);
$sql="INSERT INTO feedback (name, email, phone, subject, message)
VALUES ( ?,?,?,?,?)";

$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {  
    echo "Row insertion failed.\n";  
    die(print_r(sqlsrv_errors(), true));  
} else 
    {
        header('location: feedbackdone.php');
    }

?>
