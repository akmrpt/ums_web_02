<?php
session_start();
?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
 $login_id = $_POST['login_id'];
 $login_pw = $_POST['login_pw'];
 

 //echo $login_id ." / ".$login_pw  ;  

  
$query="select * from [dbo].[tblUsers] where userid =  '$login_id' and password='$login_pw' ";

require ('conn.php');
$rs=odbc_exec($conn,$query);
$num_rows    =    odbc_num_rows($rs) ;
 
    if($num_rows==1){
 

    $c_User= $login_id ; //odbc_result($rs,"UserName");

    $_SESSION['username'] = $c_User;
    // Redirect user to index.php
        header("Location: index.php");
    exit();
    } else {
        echo "<div class='form'>
    <h3>Username/password is incorrect.</h3>
    <br/>Click here to <a href='login.php'>Login</a></div>";
        }
    odbc_free_result($rs);
 }
 odbc_close($conn);

 ?>