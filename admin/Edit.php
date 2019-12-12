<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menuedit</title>
    </head>
    <body>
      <?php 
      $name=$_GET["name"];
      $Link=$_GET["link"];
      ?>
        <form method="post" action="#">
        <input type="text" name="menuname" value="<?php echo $name ?>">
        <input type="text" name="link" value="<?php echo $Link ?>">
        <input type="submit" name="submit" value="save">
    </form>
        <?php
        if(isset($_POST["submit"]))
        {
            $Name=$_POST["menuname"];
            $Menulink=$_POST["link"];
            $conn= mysqli_connect("localhost", "root","", "bekrishop");
            
            
            if( mysqli_query($conn, "update menus set name='$Name',link='$Menulink'")){
                    echo '<script>alert("Your Menu updated sucessfully");</script>';
                       
                    }else{
                        echo '<script>alert("Your  not updated sucessfully'. mysqli_error($conn).'");</script>';
                    }
        }
        
        
        ?>
        </body>
</html>
