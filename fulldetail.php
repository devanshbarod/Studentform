<?php
    include "connect.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $y = $_POST['25'];
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
    $z = $_POST['26'];
    $m = $_POST['13'];
    $n = $_POST['14'];
    $o = $_POST['15'];
    $p = $_POST['16'];
    $q = $_POST['17'];
    $r = $_POST['18'];
    $s = $_POST['19'];
    $t = $_POST['20'];
    $u = $_POST['21'];
    $v = $_POST['22'];
    $w = $_POST['23'];
    $x = $_POST['24'];

    $class12 = "INSERT INTO class10(ROLL_NO,CLASS,INSTITUTE_NAME,CLASS_SUBJECT,BOARD,MIDIUM,MIN,MAX,TOTAL_PERSENT,YEAR_,STATE_,CITY,PIN_CODE) VALUES('$y','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";

    $class10 = "INSERT INTO class12(ROLL_NO,CLASS,INSTITUTE_NAME,CLASS_SUBJECT,BOARD,MIDIUM,MIN,MAX,TOTAL_PERSENT,YEAR_,STATE_,CITY,PIN_CODE) VALUES('$z','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x')";

    $result = mysqli_query($connect,$class10);
    if(!$result){
        die("Data Not Inserted<br>");
    }
    else{
        echo "Data Inserted Succesfully<br>";
    }
    $result2 = mysqli_query($connect,$class12);
    if(!$result2){
        die("Data Not Inserted<br>");
    }
    else {
        echo "Data Inserted Successfully<br>";
        header("Location: http://localhost/muportal/last.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fulldetailstu2.css">
    <title>Document</title>
    
</head>
<style>
    *{
    box-sizing: border-box;
    font-family: "poppins" sans-serif;
}
.hh{
    color: black;
    font-size: 20px;
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
    width: 730px;
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
button{
    padding: 2% 8% 2% 8%;
    font-size: 20px;
    background-color:blueviolet;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}
.b2{
    margin-left: 50%;
}
img{
    width: 120px;
    height: 119px;
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
    text-align: center;
    background-color:blueviolet;
    color: white;
    cursor: pointer;
    margin-bottom: 8%;
}
</style>
<body>
    <div class="for">
        <form action="#" method="post">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPRwwXn2lyOh5a7RtkVMYHy0ghXpSyGQaTtA&s" alt=""><div class="image"><span class="span"> MEDI-CAPS UNIVERSITY INDORE, MADHYA PRADESH</span><br>
            </div><br>
            <div class="name">
                <h2>Academic Details</h2>
            </div>
            <br><br>
            
            <label class="hh" for="10">Add 10th Standard(Secondary education) details</label><br><br>
            <input type="text" name="25" id="" placeholder="Roll No" required><br><br>
            <select name="1" id="class" required>
                <option value="class">class</option>
                <option value="10th">10th</option>
            </select><br><br>
            <input type="text" name="2" id="a" placeholder="Institute Name" required><br><br>
            <select name="3" id="midium" required>
                <option value="choice">Subject</option>
                <option value="All">All</option>
            </select><br><br>
            <select name="4" id="board" required>
                <option value="choice">Board</option>
                <option value="M.P Board">M.P Board</option>
                <option value="Central Board of Secandary Education">Central Board of Secandary Education</option>
            </select><br><br>
            <select name="5" id="midium" required>
                <option value="choice">Midium</option>
                <option value="Hindi">Hindi</option>
                <option value="English">English</option>
                <option value="Other">Other</option>
            </select><br><br>
            <label for="percent" class="hh">Grand Total Percentage</label><br><br>
            <input type="number"  oninput="percentage()" placeholder="Min" name="6" id="p" required><br><br>
            <input type="number" oninput="percentage()" placeholder="Max" name="7" id="p2" required><br><br>
            <label for="percent" class="hh">Aggregate Percentage</label><br><br>
            <input type="number" oninput="percentage()" placeholder="Aggregate%" name="8" id="total" required><br><br>
            <input type="number" id="" name="9" placeholder="Year" required><br><br>
            <input type="text" id="" name="10" placeholder="State" required><br><br>
            <input type="text" id="" name="11" placeholder="city" required><br><br>
            <input type="number" id="h" name="12" placeholder="Pin Code" required><br><br><br><br><br>

            
            <label class="hh" for="12">Add 12th Standard(Higher secondary education) details</label><br><br>
            
            <input type="text" name="26" id="" placeholder="Roll No" required><br><br>
            <select name="13" id="class" required>
                <option value="class">class</option>
                <option value="12th">12th</option>
            </select><br><br>
            <input type="text" name="14" id="" placeholder="Institute Name" required><br><br>
            <select name="15" id="subject" required>
                <option value="choice">Subject</option>
                <option value="Maths">Maths</option>
                <option value="Bio">Bio</option>
                <option value="Agriculture">Agriculture</option>
                <option value="Commerce">Commerce</option>
                <option value="Arts">Arts</option>
            </select><br><br>
            <select name="16" id="board" required>
                <option value="choice">Board</option>
                <option value="M.P Board">M.P Board</option>
                <option value="Central Board of Secandary Education">Central Board of Secandary Education</option>
            </select><br><br>
            <select name="17" id="midium" required>
                <option value="choice">Midium</option>
                <option value="Hindi">Hindi</option>
                <option value="English">English</option>
                <option value="Other">Other</option>
            </select><br><br>
            <label for="percent" class="hh">Grand Total Percentage</label><br><br>
            <input type="number" oninput="percentage2()" placeholder="Min" name="18" id="p22" required><br><br>
            <input type="number" oninput="percentage2()" placeholder="Max" name="19" id="p222" required><br><br>
            <label for="percent" class="hh">Aggregate Percentage</label><br><br>
            <input type="number" oninput="percentage2()" placeholder="Aggregate%" name="20" id="total2" required><br><br>
            <input type="number" id="" name="21" placeholder="Year" required><br><br>
            <input type="text" id="" name="22" placeholder="State" required><br><br>
            <input type="text" id="" name="23" placeholder="city" required><br><br>
            <input type="number" id="" name="24" placeholder="Pin Code" required><br><br><br><br><br>
    
            <input type="submit" id="btn" value="Submit">
        </form>
    </div>
    <script>
            function percentage(){
            let percent = document.getElementById("p").value;
            let percent2 = document.getElementById("p2").value;
            document.getElementById("total").value = (percent/percent2)*100;
        }
        function percentage2(){
            let percent2 = document.getElementById("p22").value;
            let percent22 = document.getElementById("p222").value;
            document.getElementById("total2").value = (percent2/percent22)*100;
        }
        </script>
</body>
</html>
