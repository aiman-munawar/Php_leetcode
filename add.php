<?php
require_once "db_connection.php";
$cont=dbconnection();
if($_SERVER['REQUEST_METHOD']==='POST'){;
$Title=$_POST['Title'];
$Description=$_POST['Description'];
$Start_Date=$_POST['Start_date'];
$End_date=$_POST['End_date'];
$userid=$_POST['userid'];
$sql="INSERT INTO task(Title,description,Start_Date,End_Date,userid) VALUES('$Title','$Description','$Start_Date','$End_date','$userid')";
if($cont->query($sql)===TRUE){
       echo "Task added";
}
else{
   echo "Error";
}
}
echo "<button><a href='read.php'>Go to home</a></button>";

?>