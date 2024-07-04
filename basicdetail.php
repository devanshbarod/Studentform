<?php
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['1'];
    $b = $_POST['2'];
    $c = $_POST['3'];
    $d = $_POST['4'];
    $e = $_POST['5'];
    $f = $_POST['6'];
    $g = $_POST['7'];
    $h = $_POST['8'];
    $i = $_POST['9'];
    $j = $_POST['10'];
    $k = $_POST['11'];
    $l = $_POST['12'];
    $m = $_POST['13'];
    $n = $_POST['14'];

    $data = "INSERT INTO basicdetail1 (FIRST_NAME, LAST_NAME, DATE_OF_BIRTH, GENDER, ROLL_NO, EMAIL, MOBILE_NO, STUDENT_ADDRESS, COURSE_COMPLETION_YEAR, COURSE, FATHER_NAME, FATHER_NUMBER, MOTHER_NAME, MOTHER_NUMBER) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n')";

    $result = mysqli_query($connect, $data);
    if (!$result) {
        die("Data Not Inserted");
    } else {
        echo "Data Inserted Successfully";
        header("Location: fulldetail.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fulldetailstu.css">
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
    margin-left: 25%;
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
    width: 700px;
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
img{
    width: 125px;
    height: 116px;
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
#btn{
    background-color:blueviolet;
    color: white;
    cursor: pointer;
    margin-bottom: 8%;
}
</style>
</head>
<body>
    <div class="for">
        <form action="#" method="post" id="myForm">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPRwwXn2lyOh5a7RtkVMYHy0ghXpSyGQaTtA&s" alt=""><div class="image"><span class="span"> MEDI-CAPS UNIVERSITY INDORE, MADHYA PRADESH</span><br>
            </div><br><br>
            <div class="name">
                <h2>Student</h2>
            </div><br>
            <input type="text" name="1" id="a" placeholder="First Name" required><br><br>    
            <input type="text" name="2" id="b" placeholder="Last Name" required><br><br>
            <label for="dob" class="hh">Date of Birth</label><br><br>
            <input type="date" name="3" id="c" placeholder="Date of Birth" required><br><br>
            <select name="4" id="course" required>
                <option value="choice">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br><br>
            <input type="text" name="5" id="d" placeholder="Roll No" required><br><br>
            <input type="email" name="6" id="e" placeholder="Email" required><br><br>
            <input type="tel" name="7" id="f" placeholder="Mo.Number" required><br><br>
            <input type="text" name="8" id="g" placeholder="Address" required><br><br>
            <input type="number" name="9" id="h" placeholder="Course Completion Year" required><br><br>
            
            <select name="10" id="course" required>
                <option value="choice">Select a Course</option>
                <option value="BCA">BCA</option>
                <option value="B-tech">B-tech</option>
                <option value="B.Sc">B.Sc</option>
                <option value="BBA">BBA</option>
                <option value="MCA">MCA</option>
            </select><br><br><br><br>
            <label for="dob" class="hh">Parent's information</label><br><br>
            <input type="text" name="11" id="i" placeholder="Father's Name" required><br><br>
            <input type="tel" name="12" id="j" placeholder="Mob.Number" required><br><br>
            <input type="text" name="13" id="k" placeholder="Mother's Name" required><br><br>
            <input type="tel" name="14" id="l" placeholder="Mob.Number" required><br><br>
            <input type="submit" id="btn" value="Submit">
        </form>
    </div>
</body>
</html>
