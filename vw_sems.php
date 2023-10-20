<?php
//include auth.php file on all secure pages
include("auth.php");
require('header.php') ; 
?>
<div class='container' style="width: 800px;">
<?php 
echo '<div class="row">';
echo '<h3> Conslidated Results ?SemsName </h3>';
echo '<h4> ?Programe Name ?SemsID </h4>';
echo '<p> SESSION: Morning/Evening </p>';
echo '<div>' ; 
echo '<div class="row table-responsive table-sm">';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $prog = $_POST['dd_prog'];
    $batch = $_POST['dd_batch'];
    $semsNo = $_POST['dd_semsNo'];


}

$array=array('RegNo', 'SGPA');

require ('conn.php');
$sql = " select   p.*  from tmpmyPivot p " ; 
       $rs=odbc_exec($conn,$sql);
       $result = $rs ; 

       echo "<table  class='table table-bordered table-sm'>
       <thead >
       <tr>";
       for($i = 1;$i <= odbc_num_fields($result);$i++)
         {
            $colName = odbc_field_name($result,$i) ; 
            if ($colName != "AllDues") {
                if (in_array($colName,$array)){
                    echo    "<th class='col-sm-2'>$colName</th>";
                } else {
                   
                    echo    "<th class='col-sm-1'>
                      $colName  
                    </th>";
                 
                }
            }
         } 
         unset($i);

       echo "</tr>
       </thead>" ; 

       echo " <tbody>" ; 
       while (odbc_fetch_row($rs))
       { 
        echo "<tr>" ; 
        for($i = 1;$i <= odbc_num_fields($result);$i++)
         {
            $colName = odbc_field_name($result,$i) ; 
            $colData =    odbc_result($rs,$colName );
            
            $colDue =  odbc_result($rs,"AllDues");

            $hold_str = 'HOLD' ; 
            if ($colName != "AllDues") {
            if (in_array($colName,$array))
                {
                    echo "<td> $colData </td> " ; 
                } else {

                     if ($colDue > 16000){
                        echo "<td> $hold_str </td> " ;  
              
                     } else {
                        echo "<td> $colData </td> " ; 
                    }
                }
            }
         } 
         unset($i);
         echo "</tr>" ; 
          

        // odbc_free_result($result);
         // end of row
         

        } 
        echo "</tbody>
         </table>" ;  
         
         echo '<div>';
 ?>

 <div> 