<?php
    $d=$_GET["id"];
        $conn= mysqli_connect("localhost","root","","bekrishop");
        if(mysqli_query($conn,"delete from category where id=$d")){
            header("location:http://localhost/newtest/Admin/AdminGellery.php");
        }
        else{
            echo 'not insert';
        }
    
?> 