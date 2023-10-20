<?php
//include auth.php file on all secure pages
include("auth.php");
require('header.php') ; 
?>

<div class="container" style="width: 800px;">
    <div class="row">
        <form id="form1" name="form1" method="post" action="submit_report.php">
            <div class="form-group">
                <label for="dd_prog">Programe:</label>
                <?php 
                    require_once('vw_prog.php') ; 
                    ?>
            </div>
            <div class="form-group">
                <label for="dd_batch">Batch:</label>
                <?php 
                     require_once('vw_batch.php') ; 
                    ?>
            </div>
            <div class="form-group">
                <label for="dd_semsNo">Semester No.:</label>
                <?php 
                     require_once('vw_semsNo.php') ; 
                    ?>
            </div>
            <div class="form-group">

                <button type="submit" class="btn btn-default">Submit</button>

            </div>
        </form>
    </div>
</div>