<select class="form-control" id='dd_semsNo' name='dd_semsNo'>

<option value="">--- Select ---</option>

<?php 
 
 
for ($x = 1; $x <= 8; $x++) 
{ 
    
    ?>

    <option value="<?php echo $x ; ?>">
    <?php echo $x ; ?>

    </option>
 
 <?php 
}

 

?>

</select>