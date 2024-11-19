<?php
 require_once "db_connection.php";
 $cont=dbconnection();
 $id=$_GET["id"];
 $sql="Select * from task where Taskid=$id";
 $data=$cont->query($sql);
 $row=$data->fetch_assoc();
 echo htmlspecialchars($row["Taskid"]);
 echo "<br>";
 echo htmlspecialchars($row["Title"]);
 echo "<br>";
 echo htmlspecialchars($row["description"]);
 echo "<br>";
 echo htmlspecialchars($row["Start_Date"]);
 echo "<br>";
 echo htmlspecialchars($row["End_Date"]);
 echo "<br>";
 echo htmlspecialchars($row["userid"]);
 echo "<br>";
 echo "<button><a href='read.php'>Go to home</a></button>";
 ?>