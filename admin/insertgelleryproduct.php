<?php 
if(isset($_POST["submit"]))
{
$Productname=$_POST["pname"];
$Productrate=$_POST["prate"];
$Productimage=$_FILES["fileToUpload"]["name"];
$Productcategory=$_POST["pcate"];
$productdetail=$_POST["pdetail"];

$conn= mysqli_connect("localhost", "root", "","bekrishop");
if(mysqli_query($conn, "insert into products values('','$Productname','$Productrate','$Productcategory','$Productimage','$productdetail')"))
{
    header("location:http://localhost/newtest/admin/AdminGellery.php");
    echo 'alert("insert sucessfully")';
}
}
?>
