<?php 
if(isset($_POST["submit"]))
{
$Productname=$_POST["pname"];
$Productimage=$_FILES["fileToUpload"]["name"];

$conn= mysqli_connect("localhost", "root", "","bekrishop");
if(mysqli_query($conn, "insert into category values('','$Productname','$Productimage')"))
{
    header("location:http://localhost/newtest/admin/AdminGellery.php");
    echo 'alert("insert sucessfully")';
}

}
?>
