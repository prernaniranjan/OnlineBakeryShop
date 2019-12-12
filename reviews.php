<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bekri-Reviews</title>
        
             <link href="style/header.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="style/footer.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/headermenu.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/footermenu.css" rel="stylesheet">
        <link href="style/reviews.php.css" rel="stylesheet">
   
    </head>
    <body>
        <header><?php include 'header.php'; ?></header>
        <div class="container">
            <h1>Current Reviews</h1>
            <div class="jitesh">
                <table border="1" width="100%">
                    <?php
                    $conn= mysqli_connect("localhost", "root", "","bekrishop");
                    $sql= mysqli_query($conn, "select * from reviews");
                    while($row=mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td style="width:100%; height:50px; color:black;"><h6 style="color:blue;"><?php echo $row['email']; ?></h6><p><?php echo $row['msg']; ?></p></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
        <footer><?php include 'footer.php';?></footer>
    </body>
</html>
