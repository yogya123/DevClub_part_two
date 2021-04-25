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
    mysqli_query($con, "INSERT INTO lms (issue,name,author,cost,description) VALUES ('$issue', '$name', '$author','$cost','$description')");

    
    if ($result = mysqli_query($con,"SELECT * FROM lms"))
     {
        echo "Returned rows are: " . $result -> num_rows;
     }
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

  <title>Hello, world!</title>
  <link rel="stylesheet" href="shtyle.css" class="css">
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
        <li class="nav-item active">
          <a class="nav-link" href="mydoc.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="features.html">Features</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#adminModal">Admin</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#librarianModal">Librarian</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#userModal">User</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact1.php">Contact Us</a>
        </li>

      </ul>
      
    </div>
  </nav>
  

  <div class="modal fade" id="librarianModal" tabindex="-1" role="dialog" aria-labelledby="librarianModalLabel"

    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="librarianModalLabel">Enter the details of book you want to add</h5>
         
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="mydoc.php" method="post">
            <input type="number" name="issue" id="issue" placeholder="issue_num">
            <input type="text" name="name" id="name" placeholder="book_name">
            <input type="text" name="author" id="author" placeholder="author_name">
            <input type="number" name="cost" id="cost" placeholder="Amount per day">
            <input type="text" name="description" id="description" placeholder="Description of Book">
           
            <button class="btn"  > Submit </button>
        </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminModalLabel"> Hey! Admin</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         Choose if you want to enter or retrieve details.
        </div>
        <div class="modal-footer">
        <a href="form1.php" class="btn btn-danger my-2"><font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Enter Details<font></font></a>
          <a href="form2.php" class="btn btn-secondary my-2"><font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Retrieve Details</font></font></a>
          
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userModalLabel">Hey! Enter the details of book you want to filter</h5>
         
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action=" mydoc.php" method="post">
            <input type="number" name="issue" id="issue" placeholder="issue_num">
            <input type="text" name="name" id="name" placeholder="book_name">
            <input type="text" name="author" id="author" placeholder="author_name">
            <input type="number" name="cost" id="cost" placeholder="Amount per day">
            
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <div class="alert alert-dark alert-secondary" role="alert">
    <strong>Hey!</strong> Welcome to the Library Management System of IIT Delhi
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://source.unsplash.com/1600x500/?technology,read" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Library Management System</h5>
          <p>Read as you like</p>
          <button class="btn btn-success" data-toggle="modal" data-target="#adminModal">Admin</button>
          <button class="btn btn-primary" data-toggle="modal" data-target="#librarianModal">Librarian</button>
          <button class="btn btn-danger" data-toggle="modal" data-target="#userModal">User</button>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://source.unsplash.com/1600x500/?book,library" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Library Management System</h5>
          <p>Read as you like</p>
          <button class="btn btn-success" data-toggle="modal" data-target="#adminModal">Admin</button>
          <button class="btn btn-primary" data-toggle="modal" data-target="#librarianModal">Librarian</button>
          <button class="btn btn-danger" data-toggle="modal" data-target="#userModal">User</button>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://source.unsplash.com/1600x500/?library,book" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Library Management System</h5>
          <p>Read as you like</p>
          <button class="btn btn-success" data-toggle="modal" data-target="#adminModal">Admin</button>
          <button class="btn btn-primary" data-toggle="modal" data-target="#librarianModal">Librarian</button>
          <button class="btn btn-danger" data-toggle="modal" data-target="#userModal">User</button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container my-4">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">Insight</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">VISION</a>
            </h3>
            <div class="mb-1 text-muted">April 21</div>
            <p class="card-text mb-auto">The vision of the Central Library, Indian Institute of Technology Delhi is to
              become one of the pioneer Science & Engineering Libraries in the world in the field of information resources,
              services and technology applications.

          </div>
          <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
            alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
            src="img8.jfif"
            data-holder-rendered="true">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">Insight</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">LIBRARY HOURS</a>
            </h3>
            <div class="mb-1 text-muted">April 22</div>
            <p class="card-text mb-auto">The book stack area
              at 1st floor and the Ground floor is open from 9:00 AM to 9:00 PM (Weekdays) and 10:00 AM
              to 6:30 PM (Weekends & Holidays). Reading Area at ground floor, first floor and the second
              floor remains open 24x7 hrs.</p>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
            alt="Thumbnail [200x250]"
            src="img9.jfif" data-holder-rendered="true" style="width: 200px; height: 250px;">
        </div>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">Insight</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">INFRASTRUCTURE & LAYOUT </a>
            </h3>
            <div class="mb-1 text-muted">April 23</div>
            <p class="card-text mb-auto">The Central Library was setup in August 1961 in a hall in the North East of the
              Textile Block of
              the Institute. It moved to the main building of the Institute in 1968 and in its existing premises
              in 1988.</p>

          </div>
          <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
            alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img5.jpg" data-holder-rendered="true">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">Insight</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">MISSION</a>
            </h3>
            <div class="mb-1 text-muted">April 24</div>
            <p class="card-text mb-auto">The mission of the Central Library, IITD is to
              provide
              resources and excellent services to all its stakeholders along with an appropriate environment
              for information access, learning, and research activities by the applications of
              information and communication technology.</p>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
            alt="Thumbnail [200x250]" src="img6.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="footer">
    <div class="container">
      <span class="text-muted">We hope visiting this site is a nice experience.</span>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>