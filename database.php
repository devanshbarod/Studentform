<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($servername,$username,$password);

    if(!$connect){
        die("Connection not connected");
    }
    else{
        echo "Connection Successfully";
    }

    $sql = "CREATE DATABASE muportal";

    $result = mysqli_query($connect,$sql);

    if(!$result){
        die("Database Not Created");
    }
    else{
        echo "Database Created Succesfully";
    }

?>