<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <link href="style/register.css" rel="stylesheet">
    </head>
    <body>
        
            <div class="register1">
                <h1>Registration Form</h1><br><br>
                <form action="registersubmit.php" method="post">
                    <input type="text" placeholder="User Name" name="username" required /></br></br>
                    <input type="email" placeholder="User Email" name="email" required /><br><br>
                    <input type="text" placeholder="Mobile Number" name="mobilenumber" autocomplete="off" required /><br><br>
                    <input type="password" placeholder="Passward" name="passward" required /><br><br>
                    <input type="password" placeholder="Confirm Passward" name="confirmpassward" autocomplete="off" required /><br><br><br>
                    <input type="submit" value="Register" name="register"/>
                    
                </form>
            </div>
        
       
    </body>

</html>