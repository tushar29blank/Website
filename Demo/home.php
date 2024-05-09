<?php 
    session_start();
    if(!isset($_SESSION['islogged']) || !$_SESSION['islogged']){
        header('location:http://localhost/demo/index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="c5">
    
    <h1 style='font-size:70px;color:cyan;text-align:center;'>WELCOME USER.. <?php echo $_SESSION['uname']?></h1>
    <p style="margin-left:5px;margin-top:520px;color:cyan;">You can exit by clicking..</p>
        
    <button style="height:40px; width:100px ;margin-left:50px;margin-bottom:0;background-color:cyan;position:absolute;" type="Submit" ><a href="logout.php">Logout</a></button>
    
</body>
</html>



