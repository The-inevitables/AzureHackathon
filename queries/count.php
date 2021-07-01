<?php

    include "../db.php";

    $sql = "SELECT count(id) as total FROM reserve";
    $stmt = sqlsrv_query( $conn, $sql );
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
                }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                echo $row['total']."<br />";
            }

    sqlsrv_free_stmt( $stmt);
?>