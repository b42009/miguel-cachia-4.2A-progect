<?php
session_start();
 
 $id = $_POST['id'];
 $num = $_POST['not'];
$class = $_POST['class'];
$date = $_POST['date'];

 if (!isset($_SESSION["login"])){
     echo "not";
$_SESSION["buywor"] = "You have to login to buy.";
        header('Location:http://localhost/selectticket.php?date='.$date.'&id='.$id);
 }else{
error_reporting(0);
session_start();

 $conn = mysqli_connect('localhost', 'root', '', 'events')  or die('Cannot 123 connect to db');
     $squery="select DISTINCT event.name,event.imagLink,ticket.price,ticket.classType 
     from event INNER JOIN ticket ON event.eventId = ticket.eventId 
     WHERE ticket.eventId = $id and ticket.edate = '$date' and classType = $class";
     
     $query = "select event.eventId,event.name,event.imagLink,event.addres,event.durationInDays,eventtypes.typeName
    from event 
    INNER JOIN eventtypes ON event.type = eventtypes.typeId
    where event.eventId ='$id'";
    $result =mysqli_query($conn, $query)
                or die ("Error in query" . mysqli_error($conn));
     
     $sresult =mysqli_query($conn, $squery)
                or die ("Error in query" . mysqli_error($conn));
 
  
    
    
    
   
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
      
      
           <?php
     
            if (isset($_SESSION["login"])){
                $idu=$_SESSION['login'];
                 $logquery = "select clientName from client WHERE clientId =$idu ";
                $logresult =mysqli_query($conn, $logquery)or die ("Error in query" . mysqli_error($conn));
                $logrow = mysqli_fetch_assoc($logresult);
                
                 echo'<li class="nav-item dropdown" style="float: right;">';
                echo'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo'hello '. $logrow[clientName];
                echo'</a>';
            echo'<div id="drop" class="dropdown-menu" aria-labelledby="navbarDropdown">';
               echo"<h4><a href='http://localhost/logout.php?page=logout.php?&datea=$date&id=14&page=selectticket.php&cata=3'>LogOut</a></h4>";
               echo' </div>';
                echo'</li>';
            }
            else{ 
                echo'<li class="nav-item dropdown" style="float: right;">';
                echo'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo'logIn/Creat acaunt';
                echo'</a>';
            echo'<div id="drop" class="dropdown-menu" aria-labelledby="navbarDropdown">';
                echo'<form class="form-inline" method="post" action="loginp.php">';
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
                 echo  "<input type='text' style='visibility: hidden' value='$id' name='id'>";
             echo'</form>';
               echo' </div>';
                echo'</li>';
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
<?php
    
    
     
    
   
  
                

          
        
                 $row = mysqli_fetch_assoc($result);
                 $srow = mysqli_fetch_assoc($sresult);
    
 echo "<div class='jumbotron' style='background-color:#808080; width:80%;    margin-left: 10%; margin-top: 2%;'>";
          
          echo"<div class='container'>";
              echo"<div class='row'>";
              echo "<div class='col-sm-12 col-md-4 col-lg-4' ><img  class='img-thumbnail' style='width:25vh;'src='$row[imagLink]' alt='Event Poster'  ></div>";
              echo "<div class='col-sm-12 col-md-8 col-lg-8'>";
                   
                 if (isset($_SESSION["buywor"])){
                     $messb = $_SESSION["buywor"];
                     echo'<mark>'.$messb.'</mark>';
                 }
    $total = ($srow[price] *  $num);
                  echo"<H2>$row[name] </H2><h5>Price: €$srow[price] x  €$num =€$total</h5><p></p>";
                  echo"<hr style='border-top: dotted 3px;' >";
                  echo"<p>type:$row[typeName] </p><p>Addres: $row[addres]</p><p>Date:$date</p>";
                 
                           
                           echo"<p>";
                            echo"<div class='container' style=' width: 100%; background-color: #A9A9A9;#A9A9A9' >";
                     echo"<form  method='post' action='buyproces.php' class='container-fluid'>";
                          echo"<div class='row'>";
                          echo"<h5   class='col-sm-12 col-md-12 col-lg-12'>Number on Card:</h5>";
                            echo"<input type='number' name='number'  class='col-sm-12 col-md-12 col-lg-12'>";
       echo  "<input type='text' style='visibility: hidden' value='$date' name='date'>";
                            echo"<h5   class='col-sm-12 col-md-12 col-lg-12'>Name on Card:</h5>";
                            echo"<input type='text' name='noc'  class='col-sm-12 col-md-12 col-lg-12'>";
      
                            echo"<h5   class='col-sm-12 col-md-12 col-lg-12'>Year on Card:</h5>";
                            echo"<select style='object-position: center; ' class='col-sm-12 col-md-12 col-lg-12' name='yot'>";
                            $y = date('Y');
                            
                                for($i=0;$i<10;$i++)  {             
                                      echo"<option value='$y'>$y</option>";
                                      $y=$y +1;
                                      }
                            echo"</select>";
     echo  "<input type='text' style='visibility: hidden' value='3' name='cata'>";
                             echo"<h5 class='col-sm-12 col-md-12 col-lg-12'>month on Card:</h5>";
                            echo"<select style='object-position: center; ' class='col-sm-12 col-md-12 col-lg-12' name='mot'>";
                                $d = 1;
                            
                                for($i=0;$i<12;$i++)  {             
                                      echo"<option value='$d'>$d</option>";
                                      $d=$d +1;
                                      }
                            echo"</select>";
                        
                               
            echo  "<input type='text' style='visibility: hidden' value=' $total' name='total'>";
               echo  "<input type='text' style='visibility: hidden' value='$num' name='not'>";
                
                 echo  "<input type='text' style='visibility: hidden' value='$id' name='id'>";
     echo  "<input type='text' style='visibility: hidden' value='$class' name='class'>";
     echo"<input type ='submit' value'BUY'class='col-sm-12 col-md-12 col-lg-12'>";
                                      

                                      echo"</div>";
                                  echo"</form>";
                                  echo"</div>";  
                            
                            
                            
                            
                            
                        
                              echo"</div>";
 
   
   
       echo"</div>";
       echo"</div>";
       echo"</div>";


       ?>
    </body>
 
</body>
</html>
     
     
     
     
 <?php
      }
?>
