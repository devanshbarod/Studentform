<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="employeeform.css">
    <title>Document</title>
    <style>
        *{
    box-sizing: border-box;
    font-family: "poppins" sans-serif;
}
body{
    margin-top: 10%;
    margin-left: 35%;
}
.name{
    border: 2px solid black;
    margin-right: 63%;
    margin-bottom: 3%;
    padding: 3%;
    text-align: center;
    border-radius: 20px;
    color: black;
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
.for .in{
    width: 100%;
    padding: 3%;
    font-size: 16px;
}
#btn{
    background-color:blueviolet;
    color: white;
}
.co{
    color: black;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="for">
        <form action="#">
            <div class="name">
                <h2>Employee</h2>
            </div><br><br>
            <input type="text" class="in" placeholder="Username" name="" id="" required><br><br>
            <input type="password" class="in" placeholder="Password" id="my" required><br><br>
            <input type="checkbox" class="co" onclick="myfunction()">
            <label for="show" class="co" >Show Password</label><br><br>
            <input type="submit" class="in" id="btn" value="Access" required><br><br>
        </form>
    </div>
    <script>function myfunction(){
        var x = document.getElementById("my");
        if(x.type === "password"){
            x.type="text";
        }else{
            x.type="password";
        }
    }
    </script>
</body>
</html>