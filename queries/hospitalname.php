<?php
    include "../db.php";

    $sql = "SELECT name FROM hospital";
    $stmt = sqlsrv_query( $conn, $sql );
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
            }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                                                        
                echo "<option>".$row['name']."</option>";                                              
                                                    
                }

    sqlsrv_free_stmt( $stmt);

?>