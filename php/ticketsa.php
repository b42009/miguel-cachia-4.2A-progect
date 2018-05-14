<?php
error_reporting(0);
    session_start();
  $name=$POST['name'];
$date =$_POST['date'];
$adres =$_['adres'];
$dur=$_POST['duration'];
$type=$POST['tevent'];
$ims=$_POST['imagesiz'];
$conn = mysqli_connect('localhost', 'root', '', 'events') or die('Cannot connect to db');
 $q='  INSERT INTO table_name (name,edate,)
VALUES (value1, value2, value3, ...)';  
    
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
<div class='jumbotron' style='background-color:#808080; width:80%;    margin-left: 10%; margin-top: 2%;'>
       <body class="container-fluid">

        <div class="row">
        
         
         
          <form  method='post' action='ticketsa.php' class='container-fluid'>
                          <div class='row'>";
                          <h5   class='col-sm-12 col-md-12 col-lg-12'>name of Event:</h5>
                            <input type='text' name='name'  class='col-sm-12 col-md-12 col-lg-12'>
       
                            <h5   class='col-sm-12 col-md-12 col-lg-12'>Date witch it is held:</h5>
                            <input type='date' name='date'  class='col-sm-12 col-md-12 col-lg-12'>
      
                            <h5   class='col-sm-12 col-md-12 col-lg-12'>Addres of event:</h5>
                            <input type='text' name='adres'  class='col-sm-12 col-md-12 col-lg-12'>
                            <h5   class='col-sm-12 col-md-12 col-lg-12'>Duration of event in dayes</h5>
                            <input type='number' name='duration'  class='col-sm-12 col-md-12 col-lg-12'>
                            
                             
                              <h5   class='col-sm-12 col-md-12 col-lg-12'>Type of event:</h5>
                               <select name="tevent">
                                <?php
      $typeq="select DISTINCT typeName,typeId from eventtypes INNER JOIN EVENT ON event.type = eventtypes.typeId";
       $typer =mysqli_query($conn, $typeq)or die ("Error in query" . mysqli_error($conn));
      while($row = mysqli_fetch_assoc($typer)) {
    echo' <option value="'.$row[typeId].'">'.$row[typeName].'</option> ';
        } 
                              echo'</select>';
                               echo"<h5   class='col-sm-12 col-md-12 col-lg-12'>Type of imag size:</h5>";
                              echo' <select name="imagesiz">';
                            
      $mypeq="select DISTINCT id,categoryname from imagcategory";
       $myper =mysqli_query($conn, $mypeq)or die ("Error in query" . mysqli_error($conn));
      while($mrow = mysqli_fetch_assoc($myper)) {
    echo' <option value="'.$mrow[id].'">'.$mrow[categoryname].'</option> ';
        } ?>
                              </select>
                              <h5   class='col-sm-12 col-md-12 col-lg-12'>number Of tickets:</h5>
                            <input type='text' name='ticketn'  class='col-sm-12 col-md-12 col-lg-12'>
                               
            
                                    

                                     </div>
                                 </form>
           


        </div>
    </body>
          
          <div class='container'>
    </div>
    </div>


 
</body>
</html>