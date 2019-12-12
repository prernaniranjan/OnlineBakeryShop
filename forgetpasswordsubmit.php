<?php
if(isset($_POST['submit'])){
    $mobile=$_POST['MobileNumber'];
    $pass=$_POST['password'];
    $conn= mysqli_connect("localhost","root", "","bekrishop");
    if(mysqli_query($conn,"update registration set passward='$pass' where  mobilenumber='$mobile'")){
     ?>
    <script>
        alert('Your password updated sucessfully');
      window.location="http://localhost/newtest/sigin.php";
      </script>
    <?php
    }
    else{
        echo 'not update';
    }
}
?>
