<?php

    include "../db.php";
    $sql = "select name,phone,age,address,hospital from register where id= (select max(id) as id from register)";
    $stmt = sqlsrv_query( $conn, $sql );
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
            }

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

            echo 'Name:'.$row['name']."<br /><br />".'Phone:'.$row['phone']."<br /><br />".'Age:'.$row['age']."<br /><br />".'Address:'.$row['address']."<br /><br />".'Hospital:'.$row['hospital']."<br /><br />";
            }

    sqlsrv_free_stmt( $stmt);

?>