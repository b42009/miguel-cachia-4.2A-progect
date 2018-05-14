
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
        <a class="nav-link" href="serch.php">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
       <li>
          <div class="dropdown">
  <button class="btn btn-dark" style="background-color#424242 ;"
     data-toggle="dropdown"  >
    Event Type Serch
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   <?php
      $typeq="select DISTINCT typeName from eventtypes INNER JOIN EVENT ON event.type = eventtypes.typeId";
       $typer =mysqli_query($conn, $typeq)or die ("Error in query" . mysqli_error($conn));
      while($row = mysqli_fetch_assoc($typer)) {
    echo'<a class="dropdown-item" href="typeserch.php?type='.$row[typeName].'">'.$row[typeName].'</a>';
        } ?>
  </div>
</div>
      </li>

    </ul>
    
    <form class="form-inline my-2 my-lg-0" action="serch.php" method="post">
      <input class="form-control mr-sm-2" type="search" name='serch'>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 "  id="back"src="uploads/basic1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="back"  src="uploads/basic2.jpg" alt="Second slide">
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

    
<div class='container' style=' width: 100%; background-color: #A9A9A9;#A9A9A9' >
    <form  method='post' action='naccproc.php' class='container-fluid'>
               <h1>Sighn Up:</h1>
                <hr style='border-top: dotted 3px;' />
                <div class='row'>
                   <?php  if(isset($_SESSION["nac"])){
                        $mess = $_SESSION["nac"];
                     echo'<mark>'.$mess.'</mark>';
                        }?>
                    <h5   class='col-sm-12 col-md-12 col-lg-12'>Your Name</h5>
                    <input type='text' name='fname'  class='col-sm-12 col-md-12 col-lg-12'required>
                    
                    <h5   class='col-sm-12 col-md-12 col-lg-12'>Last Name</h5>
                    <input type='text' name='lname'  class='col-sm-12 col-md-12 col-lg-12'required>
                    <h5   class='col-sm-12 col-md-12 col-lg-12'>Date of birth</h5>
                    <input type='date' name='dob' class='col-sm-12 col-md-12 col-lg-12'required >
                    
                    <h5   class='col-sm-3 col-md-3 col-lg-3'>Email</h5>
                    <input type='email' name='email'  class='col-sm-12 col-md-12 col-lg-12'required>
                    <h5   class='col-sm-3 col-md-3 col-lg-3'>Usernamed</h5>
                    <input type='text' name='username'  class='col-sm-12 col-md-12 col-lg-12'required>
                    <h5   class='col-sm-3 col-md-3 col-lg-3'>Password</h5>
                    <input type='text' name='password'  class='col-sm-12 col-md-12 col-lg-12'pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
                    <input type="submit" value="Creat Accaunt" style="margin-top:30px;margin-bottom:50px;margin-left:500px">
                    
    
                           
                                      

                                     </div>
                                 </form>
                                  </div> 
                            
                            
                            
                            
    </body>
    </body>
</html>
     
     
     
     
 
