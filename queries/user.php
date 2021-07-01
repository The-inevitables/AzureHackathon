<?php

include "../db.php";

    $sql = "select name,phone from register where id= (select max(id) as id from register)";
    $stmt = sqlsrv_query( $conn, $sql );
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
                }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

                echo $row['name']."<br />".$row['phone']."<br />";
                }

    sqlsrv_free_stmt( $stmt);

?>