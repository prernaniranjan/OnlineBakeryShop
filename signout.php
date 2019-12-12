<?php
session_start();
unset($_SESSION['email']);
session_destroy();
 header("location:http://localhost/newtest/index.php");
 ?>
