<?php

    include "../db.php";
    $sql = "select state,district,hospital,department,doctor from register where id= (select max(id) as id from register)";
    $stmt = sqlsrv_query( $conn, $sql );
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
            }

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

            echo 'State: '.$row['state']."<br /><br />".'District: '.$row['district']."<br /><br />".'Hospital: '.$row['hospital']."<br /><br />".'Department: '.$row['department']."<br /><br />".'Doctor: '.$row['doctor']."<br /><br />";
            }

    sqlsrv_free_stmt( $stmt);

?>