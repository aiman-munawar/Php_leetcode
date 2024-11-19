<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display:flex;
            flex-direction:column;
        }
        input{
            width: 20%;
        }
    </style>
</head>
<body>
    <?php
        require_once "db_connection.php";
        $conn=dbconnection();
        $id=$_GET['id'];
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $Title=$_POST['Title'];
            $description=$_POST['description'];
            $Start_Date=$_POST['Start_Date'];
            $End_Date=$_POST['End_Date'];
            $userid=$_POST['userid'];
            $sql="UPDATE task SET Title='$Title',description='$description',Start_Date='$Start_Date',End_Date='$End_Date',userid='$userid' where Taskid=$id";
            if($conn->query($sql)===TRUE){
                echo "Successfully Edited";
            } else {
                echo "Error";
            }
        }
        $sql="SELECT * FROM task where Taskid=$id";
        $data=$conn->query($sql);
        $row=$data->fetch_assoc();
        echo "<form method='post'>
      <label for='Title'>Add title</label>
      <input type='text' name='Title' id='Title' value='".htmlspecialchars($row['Title'])."'>
      <label for='description'>Add discription</label>
      <input type='text' name='description' id='description' value='".htmlspecialchars($row['description'])."'>
      <label for='Start_Date'>Add start date</label>
      <input type='date' name='Start_Date' id='Start_Date' value='".htmlspecialchars($row['Start_Date'])."'>
      <label for='End_Date'>Add end date</label>
      <input type='date' name='End_Date' id='End_Date' value='".htmlspecialchars($row['End_Date'])."'>
      <label for='userid'>Add userid</label>
      <input type='number' name='userid' id='userid' value='".htmlspecialchars($row['userid'])."'>
      <input type='submit' value='submit' id='submit'>
    </form>";
    ?>
    <button><a href="read.php">Go to home</a></button>
</body>
</html>