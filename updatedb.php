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

$fname =  $_POST['fname'];
$lname =  $_POST['lname'];
$phone =  $_POST['phone']; 
$age =  $_POST['age'];
$address =  $_POST['address'];
$day =  $_POST['day'];
$hospital =  $_POST['hospital'];


$params = array($fname,$lname,$phone,$age,$address,$day,$hospital);
$sql="INSERT INTO patientInfo (fname, lname, phone, age, address,  day, hospital)
VALUES ( ?,?,?,?,?,?,?)";

$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {  
    echo "Row insertion failed.\n";  
    die(print_r(sqlsrv_errors(), true));  
} else {  
    header('location: sample/patient.php');  
} 

?>
