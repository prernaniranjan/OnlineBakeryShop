<?php session_start();
if(isset($_POST["login"])){
  $Email=$_POST['email'];
  $passward=$_POST['passward'];
            $conn= mysqli_connect("localhost","root","","bekrishop");
            $sql=mysqli_query($conn,"select * from registration where email='$Email' and passward='$passward'");
        if(mysqli_num_rows($sql)>0){
            if($Email=='prernaniranjan1997@gmail.com' || $passward=='prerna@4321'){
            header("location:http://localhost/newtest/admin/adminhome.php");    
            }
            else {
             $message="Login sucessfully..";
      echo "<script type='text/javascript'>alert('$message');</script>";
            header("location:http://localhost/newtest/index.php");
            $row= mysqli_fetch_assoc($sql);
            $_SESSION['name']=$row['username'];
            $_SESSION['email']=$row['email'];
            $_SESSION['mobile']=$row['mobilenumber'];
            }
            }else{
            echo "<script type='text/javascript'>alert('Wrong Password');"
                . "      window.location='http://localhost/newtest/sigin.php';
                //</script>";
        }
}
?>
