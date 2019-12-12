<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aboutus</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="style/aboutus.css" rel="stylesheet">
        <link href="style/header.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/headermenu.css" rel="stylesheet" type="text/css">
        <link href="style/footer.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/footermenu.css" rel="stylesheet" tpe="text/css">
    </head>
    <body>
         <?php include 'header.php';?>
        <div class="about">
            <h1><i>About Us</i></h1>
            <div class="about1">
                <img src="image/pizza.jpg"width="50%"height="450px">
                
                <div class="about2">
                    <p style="color: maroon;padding: 9%;"><b>
                            Started in 2011, we are synonymous<br> with providing the right blend of 
                        service, luxury and quiet efficiency. Our highly motivated and well 
                        trained staff provides <br>the kind of attentive, and warm service that is
                        rare today.
                        One stop destination for all your bakery needs. <br>We provide cakes for 
                        all occasions ranging from a birthday celebration to 
                        engagement/wedding ceremony. At Bakington we take great pride in<br> 
                        the quality of our work being fully committed to the satisfaction of
                        our customers.<br>
                        </b> </p>  
                </div>
                
               
            </div>
        </div>
       <?php include 'footer.php';?>
    </body>
</html>
