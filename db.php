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
?>
