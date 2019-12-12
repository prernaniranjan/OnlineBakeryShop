<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> MENU PAGE</title>
    </head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="style/menu.css" rel="stylesheet">
    <link href="style/header.css" rel="stylesheet" type="text/css">
    <link href="menus/menustyle/headermenu.css" rel="stylesheet" type="text/css">
    <link href="style/footer.css" rel="stylesheet" type="text/css">
    <link href="menus/menustyle/footermenu.css" rel="stylesheet" tpe="text/css">

    <body>
        <header> <div class="head"><?php include 'header.php'; ?></div></header>
        <div class="mmenu">
            <div class="mmenu1">
                <ul>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "bekrishop");
                    $sql = mysqli_query($conn, "select pname from category");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <a href="#<?php echo $row['pname'];?>"><li><?php echo $row['pname']; ?></li></a>
                        <?php
                    }
                    ?>

                </ul>

            </div>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "bekrishop");
            $sql = mysqli_query($conn, "select * from category");
            while ($row = mysqli_fetch_array($sql)){
                ?>
            <div class="cake" id="CAKES"> CAKES
            
                <table width="100%">
                        <tr>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Name</th>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Prize</th>
                            <th style="width:20%; text-align: center; background-color:maroon;color:white;"></th>
                        </tr>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "bekrishop");
                        $sql = mysqli_query($conn, "select * from products where productcategory='CAKES'");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td style="width:40%; text-align: center;"><?php echo $row['productname']; ?></td>
                                <td style="width:40%; text-align: center;"><?php echo $row['productrate']; ?></td>
                                <td style="width:20%; text-align: center;"><a href="orderonline.php?id=<?php echo $row['productid']; ?>">Shop Now</a></td>
                            </tr>
                            <?php
                        }
                        ?>    
                    </table>
                </div>
            
             <div class="cake" id="BUNS">BUNS
            
                <table width="100%">
                        <tr>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Name</th>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Prize</th>
                            <th style="width:20%; text-align: center; background-color:maroon;color:white;"></th>
                        </tr>
                        <?php
                        $cate = $row['pname'];
                        $conn = mysqli_connect("localhost", "root", "", "bekrishop");
                        $sql = mysqli_query($conn, "select * from products where productcategory='BUNS'");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td style="width:40%; text-align: center;"><?php echo $row['productname']; ?></td>
                                <td style="width:40%; text-align: center;"><?php echo $row['productrate']; ?></td>
                                <td style="width:20%; text-align: center;"><a href="orderonline.php?id=<?php echo $row['productid']; ?>">Shop Now</a></td>
                            </tr>
                            <?php
                        }
                        ?>    
                    </table>
                </div>
            
            <div class="cake" id="SNACKS"> SNACKS
            
                <table width="100%">
                        <tr>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Name</th>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Prize</th>
                            <th style="width:20%; text-align: center; background-color:maroon;color:white;"></th>
                        </tr>
                        <?php
                        $cate = $row['pname'];
                        $conn = mysqli_connect("localhost", "root", "", "bekrishop");
                        $sql = mysqli_query($conn, "select * from products where productcategory='SNACKS'");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td style="width:40%; text-align: center;"><?php echo $row['productname']; ?></td>
                                <td style="width:40%; text-align: center;"><?php echo $row['productrate']; ?></td>
                                <td style="width:20%; text-align: center;"><a href="orderonline.php?id=<?php echo $row['productid']; ?>">Shop Now</a></td>
                            </tr>
                            <?php
                        }
                        ?>    
                    </table>
                </div>
             <div class="cake" id="BREAD">BREAD
            
                <table width="100%">
                        <tr>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Name</th>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Prize</th>
                            <th style="width:20%; text-align: center; background-color:maroon;color:white;"></th>
                        </tr>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "bekrishop");
                        $sql = mysqli_query($conn, "select * from products where productcategory='BREAD'");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td style="width:40%; text-align: center;"><?php echo $row['productname']; ?></td>
                                <td style="width:40%; text-align: center;"><?php echo $row['productrate']; ?></td>
                                <td style="width:20%; text-align: center;"><a href="orderonline.php?id=<?php echo $row['productid']; ?>">Shop Now</a></td>
                            </tr>
                            <?php
                        }
                        ?>    
                    </table>
                </div>
             <div class="cake" id="Ice-Cream">Ice-Cream
            
                <table width="100%">
                        <tr>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Name</th>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Prize</th>
                            <th style="width:20%; text-align: center; background-color:maroon;color:white;"></th>
                        </tr>
                        <?php
                        $cate = $row['pname'];
                        $conn = mysqli_connect("localhost", "root", "", "bekrishop");
                        $sql = mysqli_query($conn, "select * from products where productcategory='Ice-Cream'");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td style="width:40%; text-align: center;"><?php echo $row['productname']; ?></td>
                                <td style="width:40%; text-align: center;"><?php echo $row['productrate']; ?></td>
                                <td style="width:20%; text-align: center;"><a href="orderonline.php?id=<?php echo $row['productid']; ?>">Shop Now</a></td>
                            </tr>
                            <?php
                        }
                        ?>    
                    </table>
                </div>
             <div class="cake" id="CANNOILROLL">CANNOILROLL
            
                <table width="100%">
                        <tr>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Name</th>
                            <th style="width:40%; text-align: center; background-color:maroon;color:white;">Product Prize</th>
                            <th style="width:20%; text-align: center; background-color:maroon;color:white;"></th>
                        </tr>
                        <?php
                        $cate = $row['pname'];
                        $conn = mysqli_connect("localhost", "root", "", "bekrishop");
                        $sql = mysqli_query($conn, "select * from products where productcategory='CANNOILROLL'");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td style="width:40%; text-align: center;"><?php echo $row['productname']; ?></td>
                                <td style="width:40%; text-align: center;"><?php echo $row['productrate']; ?></td>
                                <td style="width:20%; text-align: center;"><a href="orderonline.php?id=<?php echo $row['productid']; ?>">Shop Now</a></td>
                            </tr>
                            <?php
                        }
                        ?>    
                    </table>
                </div>
            
            
                    <?php }?>
          
                
                <br><br>
    

        </div>
        <footer> <?php include"footer.php" ?></footer>
    </body>
</html>
