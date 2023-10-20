<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $prog = $_POST['dd_prog'];
    $batch = $_POST['dd_batch'];
    $semsNo = $_POST['dd_semsNo'];

   

     //echo $prog ; 
 
require ('vw_sems.php');

 

  }

?>