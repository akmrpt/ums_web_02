<?php
//include auth.php file on all secure pages
include("auth.php");
require('header.php') ; 
?>
 
    <div class="container" style="width: 800px;">
    <div class="row">
    <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
    <p><a href="reportFilter.php">Dashboard</a></p>

    </div>
         
    </div>

