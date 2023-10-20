<select class="form-control" id='dd_prog' name='dd_prog'>

<option value="">--- Select ---</option>

<?php 






require ('conn.php');
$sql="select _ID as ID , Prog_Title + ' (' + Prog_Spcl + ')' as Prog_Title   
from [dbo].[tblMST_Programe]
Order by Prog_Title ";
$rs=odbc_exec($conn,$sql);
if (!$rs)
  {exit("No Record Found.");}

 
while (odbc_fetch_row($rs))
{ 
    $c_ID=odbc_result($rs,"ID");
    $c_Name=odbc_result($rs,"Prog_Title");
    ?>

    <option value="<?php echo $c_ID ; ?>">
    <?php echo $c_Name ; ?>

    </option>
 
 <?php 
}

odbc_close($conn);

?>

</select>