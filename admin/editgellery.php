<html>
    <head>
        <title>edit gallery</title>
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
        <?php
        $id=$_GET["id"];
        $name=$_GET["pname"];
        $pimg=$_GET["pimg"];
        
        ?>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="demoImage" onchange="myFunction(this)" value="<?php echo $pimg;?>">
            <input type="text" name="name" value="<?php echo $name; ?>">
            
              <input type="submit" name="submit" value="Save">
        </form>
    </body>
</html>

<?php
 if(isset($_POST['submit'])){
        $conn= mysqli_connect("localhost","root","","bekrishop");
        $Productimage=$_FILES["fileToUpload"]["name"];
        $name=$_POST["name"];
       
     
        if(mysqli_query($conn,"update category set pname='$name', pimg='$Productimage' where id='$id'")){
           header("location:http://localhost/newtest/admin/AdminGellery.php");
    echo 'alert("Update sucessfully")';
        }
        else{
            header("location:http://localhost/newtest/admin/AdminGellery.php");
    echo 'alert("Not Update ")';
        }
 }
 ?>