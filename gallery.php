<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>gellary</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="style/gallery.css" rel="stylesheet">
        <link href="style/header.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/headermenu.css" rel="stylesheet" type="text/css">
        <link href="style/footer.css" rel="stylesheet" type="text/css">
        <link href="menus/menustyle/footermenu.css" rel="stylesheet" tpe="text/css">
  
       <body>
           <div class="head"><?php include 'header.php';?></div>
              <div class="gallery">
                  <h1><i>Gallery</i></h1>
        <div class="gallery1">
       
       <?php 
            $conn= mysqli_connect("localhost", "root", "", "bekrishop");
            $sql= mysqli_query($conn, "select * from category");
                    while($row= mysqli_fetch_array($sql)){
            ?>
       
            <a href="gallery2.php?id=<?php echo $row['id'];?>&name=<?php echo $row['pname'];?>"><div class="gallery2"> <img src="image/<?php echo $row['pimg'];?>" width="100%" height="170px">
                <p><?php echo $row['pname'];?></p>
        </div></a>
            
       <?php 
                    }
       ?>

    </div>
    </div>
<footer><?php include 'footer.php'; ?></footer>
</body>
</html>
