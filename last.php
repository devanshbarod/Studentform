<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
.feed{
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
    width: 110px;
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
label{
    font-size: 20px;
}
#bt{
    background-color:rgb(156, 224, 244);
    cursor: pointer;
    margin-left: 30%;
    padding: 2% 10%;
    font-size: 20px;
}
    </style>
</head>
    <body>
        <div class="for">
            <form action="#" method="post" onsubmit="validation()">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPRwwXn2lyOh5a7RtkVMYHy0ghXpSyGQaTtA&s" alt=""><div class="image"><span class="span"> MEDI-CAPS UNIVERSITY INDORE, MADHYA PRADESH</span><br>
                </div><br><br>
                <br><br>
                <input type="text" name="1" class="feed" id="" placeholder="Roll No" required><br><br>
                <label for="" class="hh">Select Your Cast</label><br><br>
                <select name="2" id="a" required>
                    <option value="choice">Choice</option>
                    <option value="General">General</option>
                    <option value="OBC">OBC</option>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                    <option value="Other">Other</option>
                </select><br><br>
                <label for="" class="hh">You are Intrested in Intership</label><br><br>
                <select name="3" id="b" required>
                    <option value="choice">Choice</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select><br><br>
                <label for="" class="hh">You are Intrested in Placment</label><br><br>
                <select name="4" id="c" required>
                    <option value="choice">Choice</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select><br><br><br>
                <input type="text" name="5" placeholder="Feedback" class="feed"><br><br><br>
                <input type="checkbox" name="" id="check" onclick="buttonvalid()"><span class="hh">Accept All Terms and connditions</span><br><br>
                <br>
                <button disabled="true" id="bt">Submit</button>
                <br>
            </form>
        </div>
    </body>
    <script>
        function buttonvalid(){
            var check = document.getElementById("check");
            var btn = document.getElementById("bt");

            if(check.checked){
                btn.removeAttribute("disabled")
            }
            else{
                btn.disabled = "true";
            }
        }
    </script>
</html>
<?php
include "connect.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $a = $_POST['1'];
     $b = $_POST['2'];
     $c = $_POST['3'];
     $d = $_POST['4'];
     $e = $_POST['5'];
 
     $stu = "INSERT INTO lasttable(ROLL_NO,CAST,INTRESTED_INTERNSHIP,INTRESTED_PLACMENT,FEEDBACK) VALUES('$a','$b','$c','$d','$e')";
 
     $result = mysqli_query($connect,$stu);
     if(!$result){
         die("Data Not Inserted");
     }
     else{
         echo "Data Inserted Succesfully";
         header("Location: http://localhost/muportal/aftersubmit.php");
        exit;
     }
    }
?>