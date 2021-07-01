<?php
    include "../db.php";

    $sql = "SELECT id, name, hospital FROM reserve";
    $stmt = sqlsrv_query( $conn, $sql );
        if( $stmt === false) 
            {
                die( print_r( sqlsrv_errors(), true) );
            }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
            {                                                                 
                echo "<tr><td>"."A".$row['id']."</td><td>".$row['name']."</td><td>".$row['hospital']."</td></tr>";                                           
            }                                     
             
    sqlsrv_free_stmt( $stmt);

?>