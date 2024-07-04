<?php
    include "connect.php";

    $table = "CREATE TABLE studentform(
    S_ID INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FIRST_NAME CHAR(50),
    MIDDIL_NAME CHAR(50),
    LAST_NAME CHAR(50),
    EMAIL VARCHAR(50),
    PASSWORD_ VARCHAR(50),
    ROLL_NO VARCHAR(20),
    COURSE_COMPLETION_YEAR INT(5),
    COURSE CHAR(10)
    )";

    $new = mysqli_query($connect,$table);

    if(!$new){
        die("Table Not Created");
    }else{
        echo "Table Created Succesfully";
    }
?>