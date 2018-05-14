<?php
error_reporting(0);
    session_start();

  $conn = mysqli_connect('localhost', 'root', '', 'events') or die('Cannot connect to db');
    $query = "select * from event WHERE imgcategory='1' ";
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
   <a class="navbar-brand" style="color :#00FFFF;" href="http://localhost/workers.php">Let's book!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
  
      
      
      
      
         <?php
          if (isset($_SESSION["login"])){
                $id=$_SESSION['login'];
                 $logquery = "select Name from workers WHERE workerId =$id ";
    $logresult =mysqli_query($conn, $logquery)or die ("Error in query" . mysqli_error($conn));
                $logrow = mysqli_fetch_assoc($logresult);
                
                 echo'<li class="nav-item dropdown" style="float: right;">';
                echo'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo'hello '. $logrow[Name];
                echo'</a>';
            echo'<div id="drop" class="dropdown-menu" aria-labelledby="navbarDropdown">';
              echo"<h4><a href='http://localhost/logout.php?page=logout.php?&page=fpage.php&cata=1'>LogOut</a></h4>";
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
        echo'<form class="form-inline" method="post" action="loginp.php">';
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
                echo  "<input type='text' style='visibility: hidden' value='fpage.php' name='page'>";
                echo  "<input type='text' style='visibility: hidden' value='1' name='cata'>";
                 echo  "<input type='text' style='visibility: hidden' value='$id' name='idi'>";
             echo'</form>';
      echo"</div>";
      
    echo"</div>";
  echo"</div>";
echo"</div>";
               
            }
            ?>
   
          
        
    </ul>
    
    
  </div>
</nav>
<div class='jumbotron' style='background-color:#808080; width:90%;    margin-left: 5%; margin-top: 2%;'>
        
              <h1>Choos a colom to chang</h1>
        <hr align="left"width="100%">
         <table class="table table-dark" style="width:90%">
<thead>
    <tr>
     
 
        <th scope="col">eventId</th>
        <th scope="col">name</th>
<th scope="col">edate</th>
<th scope="col">imagLink</th>
<th scope="col">eventDate</th>
<th scope="col">addres</th>
<th scope="col">Tikkitimag</th>
<th scope="col">type</th>
<th scope="col">imgcategory</th>
<th scope="col">durationInDays</th>
  
  </thead>
  <tbody>
   <?php
               while($row = mysqli_fetch_assoc($result)) {
  $typeq="select DISTINCT typeName from eventtypes where typeId=$row[type]";
       $typer =mysqli_query($conn, $typeq)or die ("Error in query" . mysqli_error($conn));
    $trow = mysqli_fetch_assoc($typer);
    echo'<tr>';
      echo' <th scope="col"><a  href="updatevent.php?id='.$row[eventId].'">'.$row[eventId].'</a></th>';
       echo'<th scope="col">'.$row[name].'</th>';
       echo'<th scope="col">'.$row[edate].'</th>';
       echo'<th scope="col">'.$row[imagLink].'</th>';
       echo'<th scope="col">'.$row[eventDate].'</th>';
       echo'<th scope="col">'.$row[addres].'</th>';
       echo'<th scope="col">'.$row[ticktimag].'</th>';
       echo'<th scope="col">'.$trow[typeName].'</th>';
       echo'<th scope="col">'.$row[imagecategory].'</th>';
       echo'<th scope="col">'.$row[durationInDays].'</th>';
     
    echo'</tr>';
      }              
            ?>
   
  </tbody>
</table>
          
          <div class='container'>
    </div>
    </div>


 
</body>
</html>