<?php session_start(); ?>
<html>
    <head> 
        <meta charset="UTF-8">
        <title>Sigin</title>
        <link href="style/sigin.css" rel="stylesheet">
    </head>
    <body>
        <div class="sigin"><h1>LOG IN</h1><br><br>
            <form action="siginsubmit.php" method="post">
                <input type="email" placeholder="User Email" name="email" required /><br><br>
                <input type="password" placeholder="Passward" name="passward" required /><br><br><br><br><br><br>
                <input type="submit" value="Login" name="login"/><br><br>
                <a href="forgate.php">Forget Password?</a><br><br>
                <a href="register.php">Register Now if you don't have an account....</a><br>
                    
               
            </form></div>
    </body>
</html>
