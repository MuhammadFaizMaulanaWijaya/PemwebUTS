<?php

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemweb-db';


$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);

if(mysqli_connect_errno()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}

function delete($id) {
    global $db_connect;
    mysqli_query($db_connect, "DELETE FROM products WHERE id = $id");
    return mysqli_affected_rows($db_connect);
}

