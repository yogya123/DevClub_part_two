<?php

$insert=false;
if(isset($_POST['full_name']))
{
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con)
    {
        die("connection to the database failed due to".mysqli_connect_error());
    }
    $full_name= $_POST['full_name'];
    $email_address = $_POST['email_address'];
    $Message=$_POST['Message'];
    $Date= $_POST['Date'];
    
    mysqli_query($con, "use lms");
    mysqli_query($con, "INSERT INTO contact (full_name, email_address, Message, Date) 
    VALUES ('$full_name','$email_address', '$Message','$Date')");

    $con->close();

}
?>

<!doctype html>
<html lang="en">

<head>
    <title> Yogya DevClub </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">IIT Delhi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="mydoc.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="features.html">Features</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Admin</a>
                        <a class="dropdown-item" href="#">Librarian</a>
                        <a class="dropdown-item" href="#">User</a>
                    </div>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="contact1.php">Contact Us</a>
                </li>

            </ul>
           
        </div>
    </nav>

    <form action="contact1.php" method="post" >
        <div class="text-center mb-4">
            <img class="mb-4" src="https://source.unsplash.com/WLUHO9A_xik/1600x900/?telephone,bye" alt="" width="100"
                height="72">
            <h1 class="h3 mb-3 font-weight-normal">Contact Us Form</h1>
            <p>Feel free to write your queries or anything to us</p>
        </div>
        <div class="form-label-group">
            <input type="name" id="inputname" class="form-control" placeholder="Name">
            <label for="inputname">Full Name</label>
        </div>
        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required=""
                autofocus="">
            <label for="inputEmail">Email address</label>
        </div>
        <div class="form-label-group">
            <input type="text" id="inputPassword" class="form-control" placeholder="Start Typing!">
            <label for="inputPassword">Type your message</label>
        </div>      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        <p class="mt-5 mb-3 text-muted text-center">© 2020-2021</p>
    </form>
</body>

</html>