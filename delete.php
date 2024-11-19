<?php
   require_once "db_connection.php";
   $cont=dbconnection();
   $id=$_GET["id"];
   $sql="Delete From task where Taskid=$id";
   if($cont->query($sql)==true){
    echo "Successfully delete";

   }else{
    echo "Error";
   }
 echo "<button><a href='read.php'>Go to home</a></button>";
?>