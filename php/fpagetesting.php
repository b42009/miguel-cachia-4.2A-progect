<?php
error_reporting(0);
    session_start();
    #connecting to db
    $conn = mysqli_connect('localhost', 'root', '', 'events') or die('Cannot connect to db');
    $query = "select eventId,name, eventDate,imagLink from event WHERE imgcategory='1' and eventDate >= CURDATE();";
    $result =mysqli_query($conn, $query)or die ("Error in query" . mysqli_error($conn));


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="stylef.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light  navbar navbar-dark bg-dark">
  <a class="navbar-brand" style="color :#00FFFF;" href="http://localhost/fpage.php">Let's book!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" style="background-color#424242 ; ">
  Login/Sghn up
</button>
      
      
      
         <?php
            if (isset($_SESSION["login"])){
                $id=$_SESSION['login'];
                 $logquery = "select clientName from client WHERE clientId =$id ";
    $logresult =mysqli_query($conn, $logquery)or die ("Error in query" . mysqli_error($conn));
                $logrow = mysqli_fetch_assoc($logresult);
                
                 echo'<li class="nav-item dropdown" style="float: right;">';
                echo'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo'hello '. $logrow[clientName];
                echo'</a>';
            echo'<div id="drop" class="dropdown-menu" aria-labelledby="navbarDropdown">';
              echo"<h4><a href='http://localhost/logout.php?page=logout.php?&page=fpage.php&cata=1'>LogOut</a></h4>";
               echo' </div>';
                echo'</li>';
            }
            else{ 
                echo'<li class="nav-item dropdown" style="float: right;">';
               echo'<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"'; echo'aria-labelledby="exampleModalLabel" aria-hidden="true">';
 echo' <div class="modal-dialog" role="document ">';
    echo'<div class="modal-content">';
      echo'<div class="modal-header">';
        echo'<h5 class="modal-title" id="exampleModalLabel">LogIn</h5>';
       echo' <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
          echo'<span aria-hidden="true">&times;</span>';
       echo' </button>';
      echo'</div>';
      echo'<div class="modal-body">';
        echo'<div class="form-group">';
                     echo'<label for="email">Username</label><br>';
                     echo' <input type="text" class="form-control" id="username" placeholder="Enter Usename" name="username">';
                    echo'</div>';
                   echo' <div class="form-group">';
                     echo' <label for="pwd">Password:</label>';
                     echo' <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">';
                   echo' </div><br>';
                 if (isset($_SESSION["logwor"])){
                     $mess = $_SESSION["logwor"];
                     echo'<mark>'.$mess.'</mark>';
                 }
                   echo' <button type="submit" style="margin-left:  30%;" class="btn btn-default">Submit</button>';
                   echo' <br>';
                   echo' <a href="">Forgot password</a>';
                echo  "<input type='text' style='visibility: hidden' value='$date' name='date'>";
                echo  "<input type='text' style='visibility: hidden' value='selectticket.php' name='page'>";
                echo  "<input type='text' style='visibility: hidden' value='3' name='cata'>";
                 echo  "<input type='text' style='visibility: hidden' value='$id' name='idi'>";
             echo'</form>';
      echo"</div>";
      
    echo"</div>";
  echo"</div>";
echo"</div>";
               
            }
            ?>
   
          
        
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 "  id="back"src="uploads/basic1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="back"  src="uploads/basic2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
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
<body class="container-fluid">

        <div class="row">
         <?php
               while($row = mysqli_fetch_assoc($result)) {
                   
                   
                   
                echo " <div id='ev' class='col-sm-12 col-md-4 col-lg-2'><a href='http://localhost/showpage.php?id=$row[eventId]' style:'text-decoration: none'>";
             
              echo "<img id='ime' src=$row[imagLink]>";
              echo "<h4 >$row[name] </h4>";
            echo"<p style = 'color: white;'>$row[eventDate]</p>";    

           echo '</a></div>';
               }              
            ?>
         
         
         
           


        </div>
    </body>
 
</body>
</html>