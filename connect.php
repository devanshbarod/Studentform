<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "muportal";

    $connect = mysqli_connect($servername,$username,$password,$databasename);

    if(!$connect){
        die("Connection not connected");
    }
    else{
        echo "Connection Successfully";
    }

?>