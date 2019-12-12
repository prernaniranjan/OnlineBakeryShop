<?php session_start();
if($_SESSION['email']==''){
?>
<script>
        alert('First you are login than shop any product.....');
      window.location="http://localhost/newtest/sigin.php";
      </script>
      <?php
      }else{
          $uname=$_SESSION['name'];
          $umail=$_SESSION['email'];
          $mob=$_SESSION['mobile'];
      ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bekri-Profile</title>
        <link href="style/profile.css" rel="stylesheet">
        <link href="style/header.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="style/footer.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/headermenu.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/footermenu.css" rel="stylesheet">
    </head>
    <body>
        <header><div class="head"><?php include 'header.php'; ?></div></header>
        <div class="container">
            <div class="user">
                <h2 style="text-align: center;">User Detail</h2><hr>
                <form method="post" action="#">
                <table width="100%">
                    <tr>
                        <td style="height:35px; text-align: center;">User Name:</td><td style="height:35px; text-align: center;"><input type="text" name="name" value="<?php echo $uname;?>"></td>
                    </tr>
                                        <tr>
                                            <td style="height:35px; text-align: center;">User Mail:</td><td style="height:35px; text-align: center;"><input type="mail" name="mail" value="<?php echo $umail;?>"></td>
                    </tr>
                                        <tr>
                        <td style="height:35px; text-align: center;">Mobile No.:</td><td style="height:35px; text-align: center;"><input type="text" name="mob" value="<?php echo $mob;?>"></td>
                    </tr>
                                        <tr>
                                            <td style="height:35px; text-align: center;">Address:</td><td style="height:35px; text-align: center;"><input type="text" name="add" placeholder="Enter Address"></td>
                    </tr>
                                        <tr>
                                            <td style="height:35px; text-align: center;">Pin Code:</td><td style="height:35px; text-align: center;"><input type="text" name="pin" placeholder="Enter PinCode"></td>
                    </tr>
                    <tr><td></td><td><input type="submit" name="update" value="Update"></td></tr>
                </table>
                </form>
            </div>
            <?php
              if(isset($_POST["update"])){
                  $conn= mysqli_connect("localhost","root","","bekrishop");
                  $name=$_POST['name'];
                  $mail=$_POST['mail'];
                  $mobile=$_POST['mob'];
                  $add=$_POST['add'];
                  $pin=$_POST['pin'];
                  if(mysqli_query($conn, "update registration set username='$name', mobilenumber='$mobile', address='$add', pincode='$pin' where email='$mail'")){
                  echo '<script>alert("Your profile updated sucessfully");</script>';
                        
                    }else{
                        echo '<script>alert("Your profile not updated sucessfully'. mysqli_error($conn).'");</script>';
                    }
              }
            ?>
        </div>
        <footer><?php include 'footer.php'; ?></footer>
    </body>
</html>
      <?php }?>