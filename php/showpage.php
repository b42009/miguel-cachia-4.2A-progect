<?php
error_reporting(0);
session_start();
 $id= $_GET['id'];
$see=$_GET['see'];
if(!isset($id) || $id == null){header('Location:http://localhost/fpage.php');}
else{


 $conn = mysqli_connect('localhost', 'root', '', 'events')  or die('Cannot 123 connect to db');
    $query = "select event.eventId,event.name,event.eventDate,event.imagLink,event.addres,event.durationInDays,eventtypes.typeName
    from event 
    INNER JOIN eventtypes ON event.type = eventtypes.typeId
    where event.eventId = '$id' ";
    $result =mysqli_query($conn, $query)
                or die ("Error in query" . mysqli_error($conn));
  
    
    if(mysqli_num_rows($result)==0){header('Location:http://localhost/fpage.php');}
    
    $row = mysqli_fetch_assoc($result);

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
      while($rrow = mysqli_fetch_assoc($typer)) {
    echo'<a class="dropdown-item" href="typeserch.php?type='.$rrow[typeName].'">'.$rrow[typeName].'</a>';
        } ?>
  </div>
</div>
      </li>
      
      
      
       <?php
            if (isset($_SESSION["login"])){
                 if( $_SESSION["user"] == 'worker'){header('Location:http://localhost/workers.php');}
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
               echo"<h4><a href='http://localhost/logout.php?page=logout.php?&id=$id&page=showpage.php&cata=2&see=1'>LogOut</a></h4>";
               echo' </div>';
                echo'</li>';
               
            }
           else{ 
                echo'<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" style="background-color#424242 ; ">';
                  echo'Login/Sghn up';
                echo'</button>';
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
        echo'<form  method="post" action="loginp.php">';
                    echo'<div class="form-group">';
                     echo'<label for="email">Username</label><br>';
                     echo' <input type="text" class="form-control" id="username" placeholder="Enter Usename" name="username">';
                    echo'</div>';
                   echo' <div class="form-group">';
                     echo' <label for="pwd">Password:</label>';
                     echo' <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">';
                   echo' </div>';
                
                 if (isset($_SESSION["logwor"])){
                     $mess = $_SESSION["logwor"];
                     echo'<mark>'.$mess.'</mark>';
                 }echo' </div>';
                   echo' <input type="submit" class="btn btn-default" value="Log In">';
                   echo' <br>';
                   echo' <a href="">Forgot password</a><p>';
                echo'<a href="accauntform.php">Sing Up</a>';
                  echo  "<input type='text' style='visibility: hidden' value='$date' name='date'>";
                echo  "<input type='text' style='visibility: hidden' value='showpage.php' name='page'>";
                echo  "<input type='text' style='visibility: hidden' value='2' name='cata'>";
                 echo  "<input type='text' style='visibility: hidden' value='$id' name='idi'>";
              echo  "<input type='text' style='visibility: hidden' value='1' name=' see'>";
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
<?php
    
    
     
    
   
  
                
 echo "<div class='jumbotron' style='background-color:#808080; width:80%;    margin-left: 10%; margin-top: 2%;'>";
          
          echo"<div class='container'>";
              echo"<div class='row'>";
     if($row[imagLink] == null){
               
                     echo "<div class='col-sm-12 col-md-4 col-lg-4' ><img  class='img-thumbnail' style='width:25vh;'src='uploads/noimage.jpg' alt='Event Poster'  ></div>";}
                   else{  echo "<div class='col-sm-12 col-md-4 col-lg-4' ><img  class='img-thumbnail' style='width:25vh;'src='$row[imagLink]' alt='Event Poster'  ></div>";}
             
              echo "<div class='col-sm-12 col-md-8 col-lg-8'>";
                  echo"<H2>$row[name] </H2><p></p>";
                  echo"<hr style='border-top: dotted 3px;' />";
                  echo"<p>type:$row[typeName] </p><p>Addres: $row[addres]</p>";
                  
                        @$da = new DateTime($row[eventDate]);
                            $da->modify('-1 day');
                        if($see == 1){
                            
                        for($z = 1;$z<=$row[durationInDays];$z++){
                              $datrow = mysqli_fetch_assoc($datresult);
                            $da->modify('+1 day');
                               $dai =  date_format($da, 'Y-m-d');
                           
                           echo"<p>";
                            echo"<div class='container' style=' width: 100%; background-color: #A9A9A9;#A9A9A9' >";
                     echo"<form  method='post' action='' class='container-fluid'>";
                          echo"<div class='row'>";
                          echo"<h5   class='col-sm-12 col-md-7 col-lg-7'>Date :$dai </h5>";

                        
                                     echo"<button  class='col-sm-12 col-md-2 col-lg-2'><a href='http://localhost/selectticket.php?date=$dai&id=$id' style:'text-decoration: none'>select</a></button>";
                                      

                                      echo"</div>";
                                  echo"</form>";
                                  echo"</div>";  
                            
                            
                            
                            
                            }}
     if($see == 2){
                        for($z = 1;$z<=$row[durationInDays];$z++){
                              $datrow = mysqli_fetch_assoc($datresult);
                            $da->modify('+1 day');
                               $dai =  date_format($da, 'Y-m-d');
                           
                           echo"<p>";
                            echo"<div class='container' style=' width: 100%; background-color: #A9A9A9;#A9A9A9' >";
                     echo"<form  method='post' action='' class='container-fluid'>";
                          echo"<div class='row'>";
                          echo"<h5   class='col-sm-12 col-md-7 col-lg-7'>Date :$dai </h5>";

                        
                                     echo"<button  class='col-sm-12 col-md-2 col-lg-2'><a href='http://localhost/ticketview.php?date=$dai&eventid=$id&see=1' style:'text-decoration: none'>select</a></button>";
                                      

                                      echo"</div>";
                                  echo"</form>";
                                  echo"</div>";  
                            
                            
                            
                            
                            }}
                        
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
