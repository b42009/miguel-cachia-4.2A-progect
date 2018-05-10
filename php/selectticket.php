<?php
error_reporting(0);
session_start();
 $date = $_GET['date'];
 $id = $_GET['id'];
if(!isset($id) ||!isset($date)|| $id == null || $date == null){header('Location:fpage.php');}

 $conn = mysqli_connect('localhost', 'root', '', 'events')  or die('Cannot 123 connect to db');
    $cquery = "select DISTINCT class.className , class.classId ,ticket.price From ticket INNER JOIN class ON ticket.classType = class.classId where eventId = $id and edate= '$date' ";
    $cresult =mysqli_query($conn, $cquery)
                or die ("Error in query" . mysqli_error($conn));

 $query = "select event.eventId,event.name,event.imagLink,event.addres,event.durationInDays,eventtypes.typeName
    from event 
    INNER JOIN eventtypes ON event.type = eventtypes.typeId
    where event.eventId = '$id' ";
    $result =mysqli_query($conn, $query)
                or die ("Error in query" . mysqli_error($conn));
 $ron = mysqli_num_rows($result);
 if( $ron == '0' ){
        header('Location:http://localhost/fpage.php'); echo "34";} 

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
        <a class="nav-link" href="new.php">News</a>
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
      
      
     <?php
            if (isset($_SESSION["login"])){
                $idu=$_SESSION['login'];
                $logquery = "select clientName from client WHERE clientId =$idu ";
                $logresult =mysqli_query($conn, $logquery)or die ("Error in query" . mysqli_error($conn));
                $logrow = mysqli_fetch_assoc($logresult);
                
                 echo' <li class="nav-item">';
                echo'<a class="nav-link" href="ticketeventselecter.php">View Tickets</a>';
              echo'</li>';
                 echo'<li class="nav-item dropdown" style="float: right;">';
                echo'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo'hello '. $logrow[clientName];
                echo'</a>';
            echo'<div id="drop" class="dropdown-menu" aria-labelledby="navbarDropdown">';
               echo"<h4><a href='http://localhost/logout.php?page=logout.php?&datea=$date&id=$id&page=selectticket.php&cata=3'>LogOut</a></h4>";
               echo' </div>';
                echo'</li>';
            }
            else{ 
                echo'<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" style="background-color#424242 ; ">';
 echo' Login/Sghn up';
echo'</button>';
                
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
                                echo'<form  method="post" action="loginp.php">';
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
                 }echo' </div>';
                   echo' <input type="submit" class="btn btn-default" value="Log In">';
                   echo' <br>';
                   echo' <a href="">Forgot password</a>';
                 echo'<a href="accauntform.php">Sing Up</a>';
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
             
 echo "<div class='jumbotron' style='background-color:#808080; width:80%;    margin-left: 10%; margin-top: 2%;'>";
          
          echo"<div class='container'>";
              echo"<div class='row'>";
              echo "<div class='col-sm-12 col-md-4 col-lg-4' ><img  class='img-thumbnail' style='width:25vh;'src='$row[imagLink]' alt='Event Poster'  ></div>";
              echo "<div class='col-sm-12 col-md-8 col-lg-8'>";
                   
                 if (isset($_SESSION["buywor"])){
                     $messb = $_SESSION["buywor"];
                     echo'<mark>'.$messb.'</mark>';
                 }
                  echo"<H2>$row[name] </H2><p></p>";
                  echo"<hr style='border-top: dotted 3px;' >";
                  echo"<p>type:$row[typeName] </p><p>Addres: $row[addres]</p><p>Date:$date</p>";
                  
                       
 
                        while($crow = mysqli_fetch_assoc($cresult)){
                           $q=1;    
                            
                            echo"<p>";
                             $nquery ="select tiketId from ticket where eventId = $id and edate ='$date' and classType = $crow[classId] and cliantId IS NULL";
                            $nresult =mysqli_query($conn, $nquery) or die ("Error in query" . mysqli_error($conn));
                                    $rows = mysqli_num_rows($nresult);
                           
                            if(mysqli_num_rows($nresult)>1){
                            echo"<div class='container' style=' width: 100%; background-color: #A9A9A9;#A9A9A9' >";
                     echo"<form  method='post' action='buyform.php' class='container-fluid'>";
                            echo  "<input type='text' style='visibility: hidden' value='$date' name='date'>";
                            echo  "<input type='text' style='visibility: hidden' value='$crow[classId]' name='class'>";
                            echo"<div class='row'>";
                          echo"<h5 class='col-sm-12 col-md-7 col-lg-7' name='clas'>type:$crow[className] Price :€$crow[price]</h5>";
                            
                            $tquery = "select tiketId from ticket
                            where eventId = $id and edate = '$date' and classType = '$crow[className]'";
                             $tresult =mysqli_query($conn, $tquery)or die ("Error in query" . mysqli_error($conn));
                                                         
                            echo"<select style='object-position: center; ' class='col-sm-12 col-md-3 col-lg-3' name='not'>";
                                   

                                    
                                    
                            $count = 1;
                            
                                while ($count <=$rows)   {             
                                      echo"<option value='$count'>$count</option>";
                                       
                                          $count = $count +1;

                                      }

                                                    echo"</select>";

                            
                            
                            
                            
                                                      
                    echo"<button type='submit'>Buy</button>";
                            
                                     
                              echo  "<input type='text' style='visibility: hidden' value='$date' name='date'>";
                echo  "<input type='text' style='visibility: hidden' value='selectticket.php' name='page'>";
                echo  "<input type='text' style='visibility: hidden' value='3' name='cata'>";
                 echo  "<input type='text' style='visibility: hidden' value='$id' name='id'>";

                                      echo"</div>";
                                  echo"</form>";
                                  echo"</div>"; 
                            }else{
                                echo"<div class='container' style=' width: 100%; background-color: #A9A9A9;#A9A9A9' >";
                     echo"<form  method='post' action='buyform.php' class='container-fluid'>";
                            echo  "<input type='text' style='visibility: hidden' value='$date' name='date'>";
                            echo  "<input type='text' style='visibility: hidden' value='$crow[classId]' name='class'>";
                            echo"<div class='row'>";
                          echo"<h5 class='col-sm-12 col-md-7 col-lg-7' name='clas'>type:$crow[className] Price :€$crow[price]</h5>";
                            
                        echo "<h5 class='col-sm-12 col-md-3 col-lg-3'>Sorry this is fully booked</h5>";
                                                         
                           
                            
                                     
                             

                                      echo"</div>";
                                  echo"</form>";
                                  echo"</div>";
                            } 
                            
                            
                            
                            
                            }

   
                              echo"</div>";
 
   
   
       echo"</div>";
       echo"</div>";
       echo"</div>";

   
       ?>
    </body>
 
</body>
</html>
