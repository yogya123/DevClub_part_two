<?php

$insert=false;
if(isset($_POST['issue']))
{
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con)
    {
        die("connection to the database failed due to".mysqli_connect_error());
    }
    $issue= $_POST['issue'];
    $name = $_POST['name'];
    $author=$_POST['author'];
    $cost= $_POST['cost'];
    $description=$_POST['description'];
   
    mysqli_query($con, "uSE lms");
    mysqli_query($con, "INSERT INTO lms (issue,name,author,cost,description) VALUES ('#issue', '$name', '$author','$cost','$description')");
    
    $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="123.jpg" alt="Library" class="bg">
    <div class="container">
        <h3> Enter the details of book you want to add</h3>
    
        <form action="form1.php" method="post">
            <input type="number" name="issue" id="issue" placeholder="issue_num">
            <input type="text" name="name" id="name" placeholder="book_name">
            <input type="text" name="author" id="author" placeholder="author_name">
            <input type="number" name="cost" id="cost" placeholder="Amount per day">
            <input type="text" name="description" id="description" placeholder="Description of Book">
            <button class="btn"> Submit </button>
        </form>
    </div> 

</body>
</html>

