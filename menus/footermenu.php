<ul class="footercategory" type="none">
    <?php
    $conn=mysqli_connect("localhost","root","","bekrishop");
    $sql=mysqli_query($conn,"select * from menus");
    while ($row=mysqli_fetch_array($sql)){
        echo '<a href='.$row['link'].'><li class="footermenus">'.$row['name'].''
              
                . '</li></a>';
    }
    ?>
</ul>