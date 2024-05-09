<?PHP
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class='c1'>
    <div class="bg-img">
    
    <form action="signup.php" method="Post" class="container">
        <label for="name">UserName</label>
        <?php
        if($_SESSION['name_err']){
            echo "<p style='color:yellow;margin-top:0px;margin-bottom:0px'>UserName already in use</p>";
            $_SESSION['name_err']=false;
        }
        ?>
        <input type="text" id="name" name="name" placeholder="Abc Xyz" required><br>
        <label for="mail">E-MAIL</label>
        <?php
        if($_SESSION['mail_same']){
            echo "<p style='color:yellow;margin-top:0px;margin-bottom:0px'>E-MAIL already in use</p>";
            $_SESSION['mail_same']=false;
        }
        if($_SESSION['mail_err']){
            echo "<p style='color:yellow;margin-top:0px;margin-bottom:0px'>Invalid E-MAIL</p>";
            $_SESSION['mail_err']=false;
        }
        ?>
        <input type="text" id="mail" name="mail" placeholder="abc@xy.com / abc@xyz.mn.in" required><br>
        <label for="pwd">Password</label>
        <?php
        if($_SESSION['pass_err']){
            echo "<p style='color:yellow;margin-top:0px;margin-bottom:0px'>PASSWORD is short</p>";
            $_SESSION['pass_err']=false;
        }
        ?>
        <input type="password" id="pwd" name="pwd" required><br><br>
        <button type="Submit" class="btn">SIGN_IN</button>
    </form>
</div>
</body>
</html>



