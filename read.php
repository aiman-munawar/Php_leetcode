<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:2px solid black;
        }
        th{
            border:2px solid black;
        }
        td{
            border:2px solid black;
        }
    </style>
</head>
<body>
<?php
   require_once "db_connection.php";
   $result=dbconnection();
   $sql="Select * from task";
   $database=$result->query($sql);
   echo "<table>
   <tr>
   <th>Taskid</th>
   <th>Title</th>
   <th>description</th>
   <th>Start_date</th>
   <th>End_date</th>
   <th>userid</th> 
   <th>Delete</th>
   <th>Update</th>
   <th>View</th>
   </tr>";
   while($row=$database->fetch_assoc()){
    echo "<tr>
    echo <button><a href='input.php'>Add data</a></button>;
    <td>". htmlspecialchars($row["Taskid"]).</td>
    <td>". htmlspecialchars($row["Title"]).</td>
    <td>". htmlspecialchars($row["description"])."</td>
    <td>". htmlspecialchars($row["Start_Date"])."</td>
    <td>". htmlspecialchars($row["End_Date"])."</td>
    <td>". htmlspecialchars($row["userid"])."</td>

    <td> <a href='delete.php?id=".$row["Taskid"]."'>Delete</a></td>
    <td> <a href='update.php?id=".$row["Taskid"]."'>Update</a></td>
    <td> <a href='view.php?id=".$row["Taskid"]."'>View</a></td>

    </tr>";
    
   }
   echo "</table>";
   
?>
</body>
</html>
