<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminGellery</title>
        <link href="style/adminheader.css" rel="stylesheet">
        <link href="style/admingellery.css" rel="stylesheet">
         <script>
        function myFunction(a){
            if(a.value){
                var file=document.getElementById("demoImage").files[0];
                var xmlhttp=new XMLHttpRequest();
        
                var formData=new FormData();
                formData.append('fileToUpload',file);
                xmlhttp.open("POST","demoSubmit.php",false);
                xmlhttp.send(formData);
                
            }
        }
        </script>

    </head>
    <body>
        <?php include 'adminheader.php';?>
        <h1>Add Category</h1>
        <form method="POST" action="gelleryimg.php" enctype="multipart/form-data">
            <table width="100%" border="1">
                <tr>
                    <td width="50%" style="text-align: center;"> Product Name</td>
                    <td width="50%" style="text-align: center;"><input type="text" name="pname" ></td>
                </tr>
                
                <tr>
                    <td width="50%" style="text-align: center;">Product image</td>
                    <td width="50%" style="text-align: center;"><input type="file" name="fileToUpload" id="demoImage" onchange="myFunction(this)"/></td>
                </tr>
                <tr><td width="50%" style="text-align: center;"><input type="submit" name="submit" value="submit"></td></tr>
            </table>
        </form>
        <hr>
        <h1>Add Products</h1>
        <form action="insertgelleryproduct.php" method="post" enctype="multipart/form-data">
            <table width="100%">
                <tr>
                    <td width="50%" style="text-align: center;"> Product Name</td>
                    <td width="50%" style="text-align: center;"><input type="text" name="pname" ></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;">Product price</td>
                    <td width="50%" style="text-align: center;"><input type="text" name="prate" ></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;">Product Category</td>
                    <td style="text-align: center;"><select name="pcate"><?php
                    $conn= mysqli_connect("localhost","root","","bekrishop");
                    $sql= mysqli_query($conn, "select * from category");
                    while($row=mysqli_fetch_array($sql)){
                        echo '<option>'.$row["pname"].'</option>';
                    }
                    ?></select></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;">Product image</td>
                    <td width="50%" style="text-align: center;"><input type="file" name="fileToUpload" id="demoImage" onchange="myFunction(this)"/></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;">Product Detail</td>
                    <td width="50%" style="text-align: center;"><textarea name="pdetail" rows="3" cols="30" ></textarea>
                </tr>
                <tr><td width="50%" style="text-align: center;"><input type="submit" name="submit" value="submit"></td></tr>
            </table>
        </form>
        <hr>
        
        
  
        <h1>View Gellery Category</h1>
        <table width="100%" border="1">
            <tr>
                <th>Category Id</th>
                <th>Category Name</th>
                <th>Category Image</th>
            </tr>
            <?php 
            $conn= mysqli_connect("localhost", "root", "", "bekrishop");
            $sql= mysqli_query($conn, "select * from category");
                    while($row= mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td style=" width:15%; text-align: center;"><?php echo $row['id']; ?></td>
                <td style="width:20%; text-align: center;"><?php echo $row['pname']; ?></td>
                <td style="width: 30%; text-align: center;"><img src="../image/<?php echo $row['pimg']; ?>" height="150px" width="100%" ></td>
                <td style="width: 20%; text-align: center;"><a href="editgellery.php?id=<?php echo $row['id'];?>&pname=<?php echo $row['pname'];?>&pimg=<?php echo $row['pimg'];?> ">Edit</a></td><td><a href="deletegellery.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
                    <?php
                    }
                    ?>
        </table>
        
        <h1>View Gellery Products</h1>
        <table width="100%" border="1">
            <tr>
                <th>Products Id</th>
                <th>Products Name</th>
                <th>Product Category</th>
                <th>Products Price</th>
                <th>Products Image</th>
                <th>Products Detail</th>
                <th></th>
            </tr>
            <?php 
            $conn= mysqli_connect("localhost", "root", "", "bekrishop");
            $sql= mysqli_query($conn, "select * from products");
                    while($row= mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td style=" width:10%; text-align: center;"><?php echo $row['productid']; ?></td>
                <td style="width:15%; text-align: center;"><?php echo $row['productname']; ?></td>
                <td style="width:15%; text-align: center;"><?php echo $row['productcategory']; ?></td>
                <td style="width:10%; text-align: center;"><?php echo $row['productrate']; ?></td>
                <td style="width: 20%; text-align: center;"><img src="../image/<?php echo $row['productimg']; ?>" height="150px" width="100%" ></td>
                    <td style="width:20%; text-align: center;"><?php echo $row['productdetail']; ?></td>
                <td style="width: 15%; text-align: center;"><a href="editgellery.php?id=<?php
                echo $row['id'];?>&pname=<?php echo $row['pname'];?>&prate=<?php echo $row['prate'];?>&pimg=<?php echo $row['pimg'];?> ">Edit</a></td><td><a href="deleteproducts.php?id=<?php echo $row['productid']; ?>">Delete</a></td>
            </tr>
                    <?php
                    }
                    ?>
        </table>
        
    </body>
</html>
