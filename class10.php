<?php
    include "connect.php";

    $table = "CREATE TABLE class10(
    S_ID INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ROLL_NO VARCHAR(20),
    CLASS CHAR(10),
    INSTITUTE_NAME CHAR(50),
    CLASS_SUBJECT CHAR(10),
    BOARD CHAR(50),
    MIDIUM CHAR(10),
    MIN FLOAT(4),
    MAX FLOAT(4),
    TOTAL_PERSENT FLOAT(4),
    YEAR_ INT(5),
    STATE_ CHAR(30),
    CITY CHAR(40),
    PIN_CODE INT(6)
    )";

    $new = mysqli_query($connect,$table);

    if(!$new){
        die("Table Not Created");
    }else{
        echo "Table Created Succesfully";
    }
?>