<?php
    include "connect.php";

    $table = "CREATE TABLE basicdetail1(
    S_ID INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FIRST_NAME CHAR(50),
    LAST_NAME CHAR(50),
    DATE_OF_BIRTH VARCHAR(20),
    GENDER CHAR(10),
    ROLL_NO VARCHAR(20),
    EMAIL VARCHAR(50),
    MOBILE_NO INT(10),
    STUDENT_ADDRESS VARCHAR(50),
    COURSE_COMPLETION_YEAR INT(5),
    COURSE CHAR(10),

    FATHER_NAME CHAR(40),
    FATHER_NUMBER INT(10),
    MOTHER_NAME CHAR(40),
    MOTHER_NUMBER INT(10)
    )";

    $new = mysqli_query($connect,$table);

    if(!$new){
        die("Table Not Created");
    }else{
        echo "Table Created Succesfully";
    }
?>