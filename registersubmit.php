<?php  if(isset($_POST["register"]))
{   $conn= mysqli_connect("localhost","root","","bekrishop");
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['mobilenumber'];
    $passward=$_POST['passward'];
    $confirmpassward=$_POST['confirmpassward'];
   

    if($confirmpassward!=$passward){
        $message="incorrect password";
      echo "<script type='text/javascript'>alert('$message');</script>";

    }
    else{
        if(mysqli_query($conn,"insert into registration values('$username','$email','$mobilenumber','$passward')")){
            ?>

      <script>alert('Insert Sucessfully');
      window.location="http://localhost/newtest/sigin.php";</script>
      
      <?php
            
        }
        else{
            echo 'not insert';
        }
    }
}
?>