
<div class="headercategory">
    <div class="headermenu">
        <?php include 'menus/headermenu.php';?>
    </div>
    <p style="float:right; color:white;font-size: 1.5vw; margin-top:-50px; background-color:black; margin-right: 2%; border-radius: 20px;">
    <?php 
    if(isset($_SESSION['email'])){ 
     echo '<a href="signout.php">Sign Out</a>';
    }else{
        echo'<a href="sigin.php">Sign In</a>';
    }
?>
    </p>
    <p style="float:right; color:white;font-size: 1.5vw; margin-top:-50px; background-color:black; margin-right: 7%; border-radius: 20px;">
    <?php 
    if(isset($_SESSION['name'])){
        $uname=$_SESSION['name'];
     echo ' Welcome:<a href="profile.php">'.$uname.'</a>';
    }else{
        echo'<a href="sigin.php">Profile</a>';
    }
    ?></p>
</div>