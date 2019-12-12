<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forgate Passward</title>
        <link href="Style/forgate.css" rel="stylesheet">
    </head>
    <body>
        <div class="forgate">
            <h1>Change Your Passward</h1> 
            <form action="forgetpasswordsubmit.php" method="post">
                <h3> <label for="email id">Enter Your Email-Id</label></h3>
                <input type="text" name="emailid">
                <h3> <label for="mobile number">Enter Your Mobile Number</label></h3>
                <input type="text" name="MobileNumber">
                <h3> <label for="passward">Enter Your New Passward</label></h3>
                <input type="text" name="password"><br><br><br><br>
                <input type="submit" name="submit" placeholder="Submit"/>
               
            </form>
        </div>
    </body>
</html>
