<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $prog = $_POST['dd_prog'];
    $batch = $_POST['dd_batch'];
    $semsNo = $_POST['dd_semsNo'];

   

     

require ('conn.php');




  }

?>

<div class="table-responsive">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Reg No.</th>
        <th>Full Name</th>
        <?php 
           $sql = "select distinct c.CourseCode,
           c.course_name  
       from [tblProg_Sems_Allocation] a
        left outer join tblMST_Courses c on c.CourseID = a.FKcourseID
       where FKProgID = $prog
       and PKSemsID = $batch
       and FKSemsID = $semsNo" ; 
       $rs=odbc_exec($conn,$sql);
        while (odbc_fetch_row($rs))
            { 
                $c_ID=odbc_result($rs,"CourseCode");
                $c_Name=odbc_result($rs,"course_name");
                echo "<th> $c_Name </th>" ; 
            }
          

        ?>
        
      </tr>
    </thead>
    <tbody>
    <?php 
$sql2 = "select a.FKCourseID, a.FKStudentID , a.FKRegNo , st.FullName   as FullName,
a.[Award_1] as [QUIZ (10)],
	a.[Award_2] as [ATTENDANCE (5)],
	a.[Award_3] as [ASSIGNMENT (10)],
	(a.[Award_1] +
	a.[Award_2] +
	a.[Award_3] ) as [SESSIONAL],
	a.[Award_4] as [MID-TERM (25)],
	a.[Award_5] as [TERMINAL (50)] ,
	(a.[Award_1] +
	a.[Award_2] +
	a.[Award_3] + 
	a.[Award_4] +
	a.[Award_5]) as [SEMESTER] 

from [tblProg_Sems_Allocation] a
 left outer join tblMST_Student st on st.StudentID = a.FKStudentID 
where a.FKProgID = $prog
and a.PKSemsID = $batch
and a.FKSemsID = $semsNo
";
    $rs2=odbc_exec($conn,$sql2);
    while (odbc_fetch_row($rs2))
            { 
                $c_ID2=odbc_result($rs2,"FKRegNo");
                $c_Name2=odbc_result($rs2,"FullName");
                echo "<tr>" ; 
                echo "<td> $c_ID2 </td>" ; 
                echo "<td> $c_Name2 </td>" ; 

                echo "<tr>" ; 
            }
           

        ?>

     <?php odbc_close($conn); ?>
    </tbody>
  </table>
  </div>