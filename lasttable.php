<?php
    include "connect.php";

    $table = "CREATE TABLE lasttable(
    S_ID INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ROLL_NO VARCHAR(20),
    CAST CHAR(20),
    INTRESTED_INTERNSHIP CHAR(5),
    INTRESTED_PLACMENT CHAR(5),
    FEEDBACK CHAR(50)
    )";

    $new = mysqli_query($connect,$table);

    if(!$new){
        die("Table Not Created");
    }else{
        echo "Table Created Succesfully";
    }
?>