<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .row{
        width: 350px;
    background: transparent;
    border: 3px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
    }
    .n{
        color: black;
        font-size: 16px;
    }
    *{
    box-sizing: border-box;
    font-family: "poppins" sans-serif;
}
body{
    margin-top: 10%;
    margin-left: 37%;
}
img{
    margin-left: 20px;
}
</style>
<body>
    <div class="row">
        <img  src="data:image/png;base64,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" alt="">
        <p class="n"><b>Your Response Recorded Succesfully</b></p>
    </div>
</body>
</html>