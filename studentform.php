<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentform.css">
    <title>Document</title>
    <style>
        *{
    box-sizing: border-box;
    font-family: "poppins" sans-serif;
}
.hh{
    color: black;
}
body{
    margin-top: 5%;
    margin-left: 35%;
}
.name{
    border: 2px solid black;
    margin-right: 63%;
    margin-bottom: 3%;
    padding: 3%;
    border-radius: 20px;
    color: black;
    text-align: center;
}
.for{
        width: 500px;
        background: transparent;
        border: 3px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
    
}
.for input{
    width: 100%;
    padding: 3%;
    font-size: 16px;
}
.for select{
    padding: 10px;
    width: 200px;
    font-size: 16px;
    border: 0;
    border-bottom: 3px solid teal;
}
#in{
    background-color:blueviolet;
    color: white;
    cursor: pointer;
}
img{
    width: 100px;
    height: 92px;
    float: left;
    margin: 0% 7% 0% 0%;
    border-radius: 18px;

}
.span{
    color: white;
    font-size: 18px;    
    text-align: center;
}
.image{
    background-color:rgb(183, 11, 163);
    text-align: center;
    border-radius: 20px;
    padding: 6%;
   
}
    </style>
</head>
<body>
    <div class="for">
        <form action="#" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPRwwXn2lyOh5a7RtkVMYHy0ghXpSyGQaTtA&s" alt=""><div class="image"><span class="span"> MEDI-CAPS UNIVERSITY INDORE, MADHYA PRADESH</span><br>
            </div><br>
            <h1 class="hh">Not a Member Yet? Request Access</h1>
            <div class="name">
                <h2>Student</h2>
            </div>
            <br><br>
            <input type="text" name="1" placeholder="First Name*" required><br><br>
            <input type="text" name="2" placeholder="Middle Name" required><br><br>
            <input type="text" name="3" placeholder="Last Name" required><br><br>
            <input type="email" name="4" placeholder="Email Address*" required><br><br>
            <input type="password" name="pass" placeholder="Password" id="pass" required><br><br>
            <input type="text" name="5" placeholder="Roll No*" required><br><br>
            <input type="text" name="6" placeholder="Course Completion Year" required><br><br>
            
            <select name="7" id="Course">
                <option value="choice">Select a Course</option>
                <option value="BCA">BCA</option>
                <option value="B-tech">B-tech</option>
                <option value="B.Sc">B.Sc</option>
                <option value="BBA">BBA</option>
                <option value="MCA">MCA</option>
            </select><br><br><br><br>
            <input type="submit" class="sub" id="in" value="Sing up to Request Access">
        </form>
    </div>
</body>
</html>
<?php
    include "connect.php";

    $pass = $_POST['pass'];
    if($pass == 12345678){
        header("Location:http://localhost/muportal/basicdetail.php");
    }else{
        echo "Worng input";
    }

    $a = $_POST['1'];
    $b = $_POST['2'];
    $c = $_POST['3'];
    $d = $_POST['4'];
    $e = $_POST['pass'];
    $f = $_POST['5'];
    $g = $_POST['6'];
    $h = $_POST['7'];

    $stu = "INSERT INTO studentform(FIRST_NAME,MIDDIL_NAME,LAST_NAME,EMAIL,PASSWORD_,ROLL_NO,COURSE_COMPLETION_YEAR,COURSE) VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";

    $result = mysqli_query($connect,$stu);
    if(!$result){
        die("Data Not Inserted");
    }
    else{
        echo "Data Inserted Succesfully";
    }
?>
