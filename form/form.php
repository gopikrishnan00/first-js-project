<?php
$n=$_POST('name');
$c=$_POST('class');
$con=mysqli_connect("localhost","root","","school");  //connect function
$sql="INSERT INTO student details(student_name,student_class) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "STUDENT DETAILS ADDED SUCCESSFULLY";
}
else
{
    echo "STUDENT DETAILS NOT ADDED";
}

?>