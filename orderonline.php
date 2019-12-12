<?php session_start();
    $name=$_SESSION['name'];
    $mail=$_SESSION['email'];
    $mobile=$_SESSION['mobile'];
    
    if($mail==''){
    ?>
  <script>
        alert('First you are login than shop any product.....');
      window.location="http://localhost/newtest/sigin.php";
      </script>
   <?php  }else{

    
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bekri Shop - booking</title>
         <link href="style/header.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="style/footer.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/headermenu.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/footermenu.css" rel="stylesheet">
        <link href="style/order.css" rel="stylesheet">
    </head>
    <body>
        <header><div class="head"><?php include 'header.php'; ?></div></header>
        <div class="container">
            <div class="productdetail">
                
                <table width="100%" border="2" style=" padding-top: 40px;">
                <h2 style="text-align: center;"><u>Product Detail</u></h2><br>
                 <?php
                  $proid=$_GET['id'];
                  $conn= mysqli_connect("localhost", "root","","bekrishop");
                  $sql= mysqli_query($conn, "select * from products where productid='$proid'");
                  while($row= mysqli_fetch_array($sql)){
                  ?>
                    <tr>
                        <td style="height:35px;">Product Name:</td><td><input type="text" name="pname" value="<?php echo $row['productname']; ?>"></td>
                        <td style="height:35px;">Product Price:</td><td><input type="text" name="prate" value="<?php  echo $row['productrate']; ?>"></td>
                    </tr>
                  <?php } ?>
                </table>
            </div>
            <div class="userdetail">
                <h2 style="text-align: center;"><u>Customer Detail</u></h2><br>
                <table width="100%" border="1" style="padding-top:20px;">
                    <tr>
                        <td style="height:35px;">Customer Name:</td><td><input type="text" name="cname" value="<?php echo $name; ?>"></td>
                        <td style="height:35px;">Customer Email:</td><td><input type="text" name="cmail" value="<?php echo $mail; ?>"></td>
                    </tr>
                    <tr>
                        <td style="height:35px;">Customer Address:</td><td><input type="text" name="caddress" placeholder="Enter Address"></td>
                        <td style="height:35px;">Mobile Number:</td><td><input type="text" name="cmobile" placeholder="Enter Mobile Number"></td>
                    </tr>
                    <tr>
                        <td style="height:35px;">Payment Option:</td><td><select name="payment"><option>Cash on Delivery</option><option>Net Banking</option><option>Debit Card</option></select></td>
                        <td style="height:35px;"></td><td><input type="text" name="pay"></td>
                    </tr>
                    <tr >
                        <td colspan="4" style="height:35px; text-align: center;"><input type="submit" onclick="buy()" name="submit"></td>
                    </tr>
                </table>
            </div>
        </div>
        <footer><?php include 'footer.php'; ?></footer>
        <script>
            function buy(){
                alert("your order is booked . your product is delivered in 7 days.");
            }
            </script>
        
    </body>
</html>

<?php } ?>