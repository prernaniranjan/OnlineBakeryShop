<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>admin home</title>
        <link href="style/adminhome.css" rel="stylesheet">
        <link href="style/adminheader.css" rel="stylesheet">
    </head>
    <body>
       <?php include 'adminheader.php';?>
        <h1 class="menuhead">Menus table</h1>
        <table border="1">
            <tr>  <th>Name</th>
            <th>Link</th>
            <th>Edit</th>
            </tr>
      
            <?php
            $conn=mysqli_connect("localhost","root","","bekrishop");
    $sql=mysqli_query($conn,"select * from menus");
    while ($row=mysqli_fetch_array($sql)){
        echo "<tr>"
        . "<td>$row[name]</td>"
                . "<td>$row[link]</td>"
                ?><td><a href="Edit.php?name=<?php echo $row["name"];?>&link=<?php echo $row["link"];?> ">Edit</a></td>"
        </tr>
    <?php }
            ?>
                
        </table>
    </body>
</html>
