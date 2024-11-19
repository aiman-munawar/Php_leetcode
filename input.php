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
            width:20%;
        }
    </style>
</head>
<body>
    
    <form action="add.php" method="POST">
    <label for="Title">Title</label>
    <input type="text" name="Title" id="Title">
    <label for="Description">Description</label>
    <input type="text" name="Description" id="Description">
    <label for="Start_date">Start_date</label>
    <input type="date" name="Start_date" id="Start_date">
    <label for="End_date">End_date</label>
    <input type="date" name="End_date" id=End_date">
    <label for="userid">Userid</label>
    <input type="number" name="userid" id="userid">
     <input type="submit" value="Submit" id="submit">
    </form>
 
</body>
</html>