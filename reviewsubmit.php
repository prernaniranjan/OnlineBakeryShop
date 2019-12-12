<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $mobile=$_POST["mobilenumber"];
    $mail=$_POST["email"];
    $msg=$_POST["message"];
    $conn= mysqli_connect("localhost","root","","bekrishop");
    if(mysqli_query($conn, "insert into reviews values('','$name','$mail','$mobile','$msg')")){
      ?>
    <script>
        alert('Your review uploaded sucessfully');
      window.location="http://localhost/newtest/reviews.php";
      </script>
    <?php
    }
    else{
        echo 'sorry';
    }
}
?>
