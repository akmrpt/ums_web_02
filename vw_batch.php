<select class="form-control" id='dd_batch' name='dd_batch'>

<option value="">--- Select ---</option>

<?php 






require ('conn.php');
$sql="select _ID as ID , sems_Name from [dbo].[tblMST_Semesters] Order by _ID desc  ";
$rs=odbc_exec($conn,$sql);
if (!$rs)
  {exit("No Record Found.");}

 
while (odbc_fetch_row($rs))
{ 
    $c_ID=odbc_result($rs,"ID");
    $c_Name=odbc_result($rs,"sems_Name");
    ?>

    <option value="<?php echo $c_ID ; ?>">
    <?php echo $c_Name ; ?>

    </option>
 
 <?php 
}

odbc_close($conn);

?>

</select>