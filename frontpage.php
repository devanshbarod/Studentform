<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prontpage.css">
    <title></title>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'poppins',sans-serif;
}
.header{
    min-height: 100vh;
    width: 100%;
    background-color: rgb(16, 57, 57);
    background-position: center;
    background-size: cover;
    position: relative;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1% 4%;
}
nav a{
    color: #fff;
    font-size: large;
    text-decoration: none;
}
nav a samp{
    font-size: large;
    color:yellow;
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    display: inline-block;
    margin: 5px 20px;
}
.nav-links ul li a{
    font-size: 20px;
    text-decoration: none;
    display: block;
}
.nav-links ul li a::after{
    content: '';
    display: block;
    margin: auto;
    height: 3px;
    width: 0%;
    background: #f1f111;
    transition: .6s;
}
.nav-links ul li a:hover::after{
    width: 100%;
}
.new{
    margin: 10% 0% 0% 20%;
    font-size: 100px;
}
.text-box{
    width: 90%;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
.text-box p{
    font-size: 14px;

}
.text-box a{
    font-size: 14px;
    text-decoration: none;
    color: white;
    display: inline-block;
    padding: 10px 40px;
    border: 1px solid #fff;
    margin-top: 10px;
    background: transparent;
    transition: .6s;

}
.text-box a:hover{
    background: #f1f111e1;
    border: 1px solid #f1f111;
}
    </style>
</head>
<body>
    <section class="header"> 
        <nav>
         <div class="nav-links">
             <ul>
                 <li><a href="#">HOME</a></li>
                 <li><a href="#">ABOUT</a></li>
                 <li><a href="#">CONTACT</a></li>
                 <li><a href="#">MENU</a></li>
                 <li><a href="#">LOGO</a></li>
             </ul>
         </div>
        </nav>
        <div class="text-box">
            <h1>Not a Member Yet ?</h1>
            <a href="requestform.php">Request Access</a>
        </div>
        <div class="new">
            <h1>THE LINEAR GARDIAN</h1>
        </div>
    </section>
</body>
</html>
