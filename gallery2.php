<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style/gallery2.css" rel="stylesheet">
        <link href="style/header.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/headermenu.css" rel="stylesheet" type="text/css">
         <link href="style/footer.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/footermenu.css" rel="stylesheet" tpe="text/css">
    </head>
    <body>
        <header><div class="head"> <?php include 'header.php';?> </head></header>
        <div class="gall">
            <?php
            $id=$_GET['id'];
            $name=$_GET['name'];
            ?>
            <h1><?php echo $name; ?></h1>
            <?php
            $conn= mysqli_connect("localhost", "root", "", "bekrishop");
            $sql= mysqli_query($conn,"select * from products where productcategory='$name'");
            while($row=mysqli_fetch_array($sql)){?>
            <div class="gall2"><div class="image"><img src="image/<?php echo $row['productimg'];?>" width="100%" height="200px"></div>
                <h2><?php echo $row['productname']; ?></h2><p class="rate">Rs:<?php echo $row['productrate']; ?>/-</p>
                <p><?php echo $row['productdetail'];?></p><br><a href="orderonline.php?id=<?php echo $row['productid'];?>"><button class="btn">Shop Now</button></a>
            </div>
            <?php }?>
                
        </div>
        <footer> <?php include 'footer.php'; ?> </footer>    
    </body>
</html>
